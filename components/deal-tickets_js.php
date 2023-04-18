<script>

 Vue.component('deal-tickets', {
  props: ['login', 'deal', 'settings', 'users', 'member', 'bxmember'],
  data: function () {
    return {
      ticketsFAQLIst: '',
      faqTabClass: 'active',
      ticketsTabClass: '',
      activTab: 'faq',
      popupVisible: false,
      contentPopup: {},
    };
  },
  template: '#deal-tickets',
  methods: {
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
  }

}); 
</script>