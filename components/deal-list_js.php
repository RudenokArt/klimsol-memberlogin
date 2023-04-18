<script>
Vue.component('deal-list', {
  props: ['login', 'list', 'settings', 'statuses', 'statuslist', 'files', 'defaultcard', 'showfields'],

  data: function() {
    return {
      content: {},
    };
  },
  mounted: async function() {
    var url = '/ajax/?deal_list_page_content=Y';
    var response = await fetch(url);
    var content = await response.json();
    this.content = content;
  },

  methods: {

    openItem(dealId)
    {
      this.$emit('open-deal', {dealId: dealId});
    },
    logOut()
    {
      this.$emit('logout');
    },
  },
  template: '#deal-list',
});

</script>