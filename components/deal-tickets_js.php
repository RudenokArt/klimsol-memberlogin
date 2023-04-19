<script>

 Vue.component('deal-tickets', {
  props: ['login', 'deal', 'settings', 'users', 'member', 'bxmember'],
  data: function () {
    return {
      ticketsFAQLIst: [],
      faqTabClass: 'active',
      ticketsTabClass: '',
      activTab: 'faq',
      popupVisible: false,
      contentPopup: {},
      addTicketPopupVisible: false,
      reason:'',
      priority: '',
      remark: '',
      ticketsLIst: [],
    };
  },
  template: '#deal-tickets',
  methods: {

    getTicketsList: async function () {
      console.clear();
      var queryString = new URLSearchParams();
      queryString.set('filter[ORIGIN_ID]', this.deal.ID);
      var url = this.settings.apiUrl + 'crm.deal.list.json?' + queryString.toString();
      var response = await fetch(url);
      var content = await response.json();
      return content.result;
    },

    addTicketFormSubmit: async function () {
      console.clear();
      var comments = '<b>Service Grund:</b> ' + this.reason + 
      '<br><b>Priorität: </b>' + this.priority + 
      '<br><b>Bemerkung:</b>' + this.remark + 
      '<br><b>Elternvertrag:</b> https://crm.klimsol.de/crm/deal/details/5111/' + this.deal.ID;
      var queryString = new URLSearchParams();
      queryString.set('fields[ORIGIN_ID]', this.deal.ID);
      queryString.set('fields[COMMENTS]', comments);
      queryString.set('fields[ASSIGNED_BY_ID]', this.deal.ASSIGNED_BY_ID);
      queryString.set('fields[CATEGORY_ID]', 7);
      queryString.set('fields[TITLE]', 'Ticket: ' + this.reason);
      var url = this.settings.apiUrl + 'crm.deal.add.json?' + queryString.toString();
      var response = await fetch(url);
      var content = await response.json();
      this.ticketsLIst = await this.getTicketsList();
      this.addTicketPopupVisible = false;
      console.log(content);
    },

    unixTimeConverter: function (unixDate) {
      return new Date(Number(unixDate) * 1000).toLocaleDateString();
    },

    popUpContent: function (item) {
      this.contentPopup = item;
    },

    setActivTab: function (tab) {
      if (tab == 'faq') {
        this.faqTabClass = 'active';
        this.ticketsTabClass = '';
        this.activTab = 'faq';
      } else {
        this.faqTabClass = '';
        this.ticketsTabClass = 'active';
        this.activTab = 'tickets';
      }

    },

    getTicketsFAQList: async function () {
      var url = this.settings.apiUrl + 'tickets.faq.list';
      var response = await fetch(url);
      var content = await response.json();
      return content.result;
    },
  },

  mounted: async function () {
    this.ticketsFAQLIst = await this.getTicketsFAQList();
    this.ticketsLIst = await this.getTicketsList();

  }

}); 
</script>