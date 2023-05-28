<script>
Vue.component('deal-list', {
  props: ['login', 'list', 'settings', 'statuses', 'statuslist', 'files', 'defaultcard', 'showfields', 'logotip'],

  data: function() {
    return {
      content: {},
    };
  },
  mounted: async function() {
    var response = await fetch(data.wordpress.apiUrl+'deal_list_page_content=Y');
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