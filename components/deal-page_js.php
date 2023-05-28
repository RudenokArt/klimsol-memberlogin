<script>
  Vue.component('deal-page', {
    props: ['login', 'deal', 'settings', 'statuses', 'statuslist', 'files', 'users', 'member', 'diskdata', 'card', 'dealfieldsinfo', 'showfieldsdefault', 'logotip'],
    methods: {
      onDiskFilesData(params)
      {
        this.$emit('disk-files-data', params);
      },
      logOut()
      {
        this.$emit('logout');
      },
      back()
      {
        this.$emit('back-to-list');
      },
      userTitle(param)
      {
        this.$emit('user-title', param);
      },
      onDealUpdate(param)
      {
        this.$emit('deal-update', param);
      },
    },
    template: '#deal-page',

    mounted: async function () {
      console.clear();
      console.log(this.logotip);
      var url = this.settings.apiUrl + 'deal.fields.filter';
      var response = await fetch(url);
      var content = await response.json();
      var result = JSON.parse(content.result);
      console.log(result);
      console.log(this.dealfieldsinfo);
      var dealFieldsFilter = {};
      for (key in this.dealfieldsinfo) {
        if (result[key] == 'on') {
          dealFieldsFilter[key] = this.dealfieldsinfo[key];
        }
      }
      this.dealfieldsinfo = dealFieldsFilter;
    }
  });
</script>