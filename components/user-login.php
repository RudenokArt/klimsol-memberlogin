<div class="login-page login-page-logo">
    <top-links :settings="settings['topLinks']"/>
    <header-menu/>
    <div class="logo">
      <div v-html="logotip" class="login-form-logotip"></div>
    </div>
    <div class="auth-block auth-block-bg">
      <div class="auth-block-item">
        <span class="login-title">{{settings['loginTitle']}}</span>
      </div>
      <div class="auth-block-item form-block">
        <input
        class="login-inp"
        type="text"
        :name="settings['loginFields']['login'][0]"
        :placeholder="settings['loginFields']['login'][1]"
        maxlength="255"
        required
        v-model="userLogin"
        >
        <input
        class="login-inp"
        type="password"
        :name="settings['loginFields']['password'][0]"
        :placeholder="settings['loginFields']['password'][1]"
        maxlength="255"
        required
        v-model="userPassword"
        >
      </div>
      <div class="auth-block-item btn-block">
        <slot v-if="stateLoading">
          <span class="login-loader loader"></span>
        </slot>
        <slot v-else>
          <input
          type="submit"
          :value="settings.buttons['login']"
          class="login-btn"
          @click="logIn()"
          >
        </slot>
        <slot v-if="errors.length > 0">
          <span class="errors">{{errors.join(', ')}}</span>
        </slot>
      </div>
    </div>
  </div>