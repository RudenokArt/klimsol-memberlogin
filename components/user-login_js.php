<script>
	  Vue.component('user-login', {
    props: ['settings', 'canlogin', 'selectfields', 'logotip'],
    data: function () {
      return {
        userLogin: '',
        userPassword: '',
        errors: [],
        stateLoading: false,
        disabled: false,
        requestUrl: this.settings['apiUrl'],
        requestMethod: this.settings['methods']['requestMethod'],
        statusMethod: this.settings['methods']['statusMethod'],
        authFieldsMethod: this.settings['methods']['authFieldsMethod'],
        getData: [],
      };
    },
    methods: {
      logIn()
      {
        var tooltipElem = document.querySelector('.links-menu-tooltip');
        if (tooltipElem) tooltipElem.remove();
        if (this.disabled) return;

        var obj = this;
        this.userLogin = this.userLogin.replace(/\s+/g, '');
        this.userPassword = this.userPassword.replace(/\s+/g, '');

        this.errors = [];
        if (this.userLogin.length === 0 || this.userPassword.length === 0) {
          this.errors.push(this.settings['errorMessages']['emptyLoginData']);
        }

        if (this.errors.length === 0) {
          this.stateLoading = true;

          var url = this.requestUrl + this.requestMethod;
          var body = {};
          var filter = {};
          var lKey = this.settings['loginFields']['login'][0];
          var pKey = this.settings['loginFields']['password'][0];
          filter[lKey] = this.userLogin;
          filter[pKey] = this.userPassword;
          body['filter'] = filter;
          body['select'] = this.selectfields;
          body['order'] = this.settings['dealsSort'];
          body = JSON.stringify(body);

          fetch(url, {
            method: 'post',
            headers: {
                        "Accept": "application/json, text/plain, */*",
              "Content-type": "application/json"
            },
            body: body,
          })
          .then(res => res.json())
          .then(function(data) {
            console.log('Request succeeded with JSON response', data);
            if (data.result) {
              if (data.result.length > 0) {
                obj.getData = data.result;
              } else {

                obj.$emit('user-data', {data: [], userLogin: obj.userLogin, userPassword: obj.userPassword, arStatus: []});
              }
            }
          })
          .catch(function(error) {
            console.log('Request failed', error);
          });
        }
      },
    },
    mounted() {
      if (this.canlogin === false) {
        this.errors.push(this.settings['errorMessages']['checkAuthFields']);
        this.disabled = true;

      } else if (this.canlogin === '') {

        var obj = this;
        var url = this.settings['apiUrl'] + this.authFieldsMethod;
        fetch(url, {
          method: 'post',
          headers: {
                    "Accept": "application/json, text/plain, */*",
            "Content-type": "application/json",
          },
        })
        .then(res => res.json())
        .then(function(data) {
          console.log('Request succeeded with JSON response', data);

          var result = (data.result) ? data.result : {};
          var checkingFields = [];
          for (var i = 0; i < Object.values(obj.settings['loginFields']).length; i++)
          {
            var fieldData = Object.values(obj.settings['loginFields'])[i];
            checkingFields.push(fieldData[0]);
          }

          var check = true;
          if (checkingFields.length === 0 || result.length === 0) {
            check = false;
          } else {

            for (var k = 0; k < checkingFields.length; k++)
            {
              var field = checkingFields[k];
              if (Object.keys(result).indexOf(field) === -1) {
                check = false;
                break;
              }
            }
          }

          if (!check) {
            obj.errors.push(obj.settings['errorMessages']['checkAuthFields']);
            obj.disabled = true;
          }

          obj.$emit('check-login-fields', {check: check});
        })
        .catch(function(error) {
          console.log('Request failed', error);
        });
      }
    },
    watch: {
      getData(newW, oldW) {
        var obj = this;
        var url = this.requestUrl + this.statusMethod;
        var body = {};
        body['filter'] = this.settings['filterStatus'];
        body = JSON.stringify(body);

        fetch(url, {
          method: 'post',
          headers: {
                    "Accept": "application/json, text/plain, */*",
            "Content-type": "application/json",
          },
          body: body,
        })
        .then(res => res.json())
        .then(function(data) {
          console.log('Request succeeded with JSON response', data);

          obj.$emit('user-data', {data: newW, userLogin: obj.userLogin, userPassword: obj.userPassword, arStatus: data.result});
        })
        .catch(function(error) {
          console.log('Request failed', error);

          obj.$emit('user-data', {data: newW, userLogin: obj.userLogin, userPassword: obj.userPassword, arStatus: []});
        });

      },
    },
    template: '#user-login',
  });
</script>