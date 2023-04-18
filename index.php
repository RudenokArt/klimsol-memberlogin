<?php
$data = [
  'settings' => [
    'apiUrl' => 'https://crm.klimsol.de/rest/36/zuaxtvdzguhrp77x/',
    'arFileUploadFields' => ['UF_CRM_1669375393280', 'UF_CRM_1669375430157', 'UF_CRM_1669375440236'],
    'filterStatus' => ['ENTITY_ID' => 'DEAL_STAGE_2'],
    'loginFields' => [
      'login' => ['UF_USER_LOGIN', 'Emailadresse'],
      'password' => ['UF_USER_PASSWORD', 'Passwort'],
    ],
    'arDefaultDealFields' => ['TITLE', 'DATE_CREATE', 'STAGE_ID'],
    'methods' => [
      'requestMethod' => 'memberlogin.get_member_data',
      'statusMethod' => 'crm.status.list',
      'authFieldsMethod' => 'crm.contact.fields',
      'fieldsMethod' => 'crm.deal.fields',
      'cardViewMethod' => 'memberlogin.get_card_view',
      'filesDataMethod' => 'memberlogin.get_files_data',
      'diskFilesDataMethod' => 'memberlogin.get_disk_files_data',
      'chatDataMethod' => 'crm.timeline.comment.list',
      'chatMessageMethod' => 'crm.timeline.comment.add',
      'userNamesMethod' => 'user.get',
      'memberRegisterMethod' => 'memberlogin.check_member_user',
      'fileUploadMethod' => 'crm.deal.update',
      'getDealDataMethod' => 'memberlogin.get_updated_deal_data',
    ],
    'errorMessages' => [
      'emptyLoginData' => 'Geben Sie Ihren Benutzernamen und Ihr Passwort ein',
      'checkAuthFields' => 'auth-Felder in Deal nicht gefunden',
    ],
    'emptyDataMsg' => 'Keine Daten',
    'loginTitle' => 'Kundenportal',
    'dealListTitle' => 'Auftrag',
    'dealPageTitle' => 'Auftrag',
    'finalizeStatusTitle' => 'Auftrag absschließen',
    'chatTitle' => 'Kommentar',
    'chatAuthorTitle' => 'Autor',
    'chatAttachedTitle' => 'Dateien',
    'chatPlaceholder' => 'Kommentar schreiben',
    'arFieldTypes' => [
      'string', 'date', 'datetime', 'char', 'crm_currency', 'integer',
      'double', 'file', 'crm_category', 'boolean', 'money',
            //'crm_company', 'crm_contact', 'user', 'address', 'employee', 'url', 'crm_status',
            //'hlblock', 'iblock_element', 'enumeration', 'iblock_section',
            //'crm_lead', 'location', 'crm_quote', 'resourcebooking', 'crm', 'vote', 'string_formatted', 'video',
            //'disk_file', 'disk_version', 'mail_message', 'url_preview',
    ],
    'dealsSort' => ['ID' => 'DESC'],
    'buttons' => [
      'logout' => 'Abmelden',
      'login' => 'Login',
      'back' => 'Zurück',
      'sendMessage' => 'Senden',
      'cancelMessage' => 'Abbrechen',
      'addFile' => 'Datei',
      'removeFile' => 'Löschen',
    ],
    'topLinks' => [
      'topLogoLink' => [
        'href' => 'https://klimsol.de',
        'src' => 'logo.png',
        'width' => '140',
        'height' => '45',
      ],
      'topMenuLinks' => [
        [
          'title' => 'Startseite',
          'href' => 'https://klimsol.de',
          'children' => [],
        ],
        [
          'title' => 'Leistungen',
          'href' => 'https://klimsol.de/photovoltaik/',
          'children' => [
            [
              'title' => 'Photovoltaikanlagen',
              'href' => 'https://klimsol.de/photovoltaik/photovoltaikanlagen/',
            ],
            [
              'title' => 'PV Parks',
              'href' => 'https://klimsol.de/photovoltaik/pv-parks/',
            ],
            [
              'title' => 'Klimaanlagen',
              'href' => 'https://klimsol.de/photovoltaik/klimaanlagen/',
            ],
            [
              'title' => 'Wärmepumpen',
              'href' => 'https://klimsol.de/photovoltaik/waermepumpen/',
            ],
            [
              'title' => 'PV Energiespeicher',
              'href' => 'https://klimsol.de/photovoltaik/pv-energiespeicher/',
            ],
            [
              'title' => 'Trafostationen',
              'href' => 'https://klimsol.de/photovoltaik/trafostationen/',
            ],
            [
              'title' => 'Anmeldung beim Netzbetreiber',
              'href' => 'https://klimsol.de/photovoltaik/anmeldung-und-foerderung/',
            ],
            [
              'title' => 'Förderung',
              'href' => 'https://klimsol.de/photovoltaik/foerderung/',
            ],
          ],
        ],
        [
          'title' => 'Über Uns',
          'href' => '#',
          'children' => [
            [
              'title' => 'Team',
              'href' => 'https://klimsol.de/team-klimsol-photovoltaik-und-solaranlagen/',
            ],
            [
              'title' => 'Karriere bei KlimSol',
              'href' => 'https://klimsol.de/jobs',
            ],
          ],
        ],
        [
          'title' => 'Anfrage',
          'href' => 'https://klimsol.de/anfrage/',
          'children' => [],
        ],
        [
          'title' => 'Blog',
          'href' => 'https://klimsol.de/blog/',
          'children' => [],
        ],
      ],
    ],
  ],
];
$data = json_encode($data, true);
?>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<!-- FONT AWESSOME -->
<script src="https://use.fontawesome.com/e8a42d7e14.js"></script>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">

<script type="text/x-template" id="user-login">
  <div class="login-page login-page-logo">
    <top-links :settings="settings['topLinks']"/>
    <div class="logo">
      <img src="logo.png" width="400" height="128" alt="logo"/>
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
</script>

<script type="text/x-template" id="deal-list">
 <?php include_once 'components/deal-list.php'; ?>
</script>

<script type="text/x-template" id="deal-page">
  <div class="deal-page">
    <div class="page-top page-top-deal">
      <div class="top-controls">
        <span class="exit-btn" @click="back()">{{settings.buttons['back']}}</span>
      </div>
      <div class="login-block">
        <span class="user-title">{{login}}</span>
        <span class="spacing"></span>
        <span class="exit-btn" @click="logOut()">{{settings.buttons['logout']}}</span>
      </div>
    </div>
    <div class="content">
      <span class="deal-page-title">{{settings['dealPageTitle']}}:</span>
      <slot v-if="statuslist && statuses && deal['STAGE_ID']">
        <status-bar
        :statuslist="statuslist" :statusnames="statuses"
        :dealstatus="deal['STAGE_ID']" :type="'deal'" :finaltext="settings['finalizeStatusTitle']"
        />
      </slot>
      <div class="deal-page-block">
        <div class="deal-page-fields">
          <slot v-if="Object.keys(card).length > 0">
            <slot v-for="cardV in card">
              <div
              :id="'section-'+cardV['sectName']"
              class="deal-section"
              >
              <div class="section-title">{{cardV['sectTitle']}}</div>
              <div class="section-fields">
                <slot v-for="(fVal,fKey) in cardV['sectFields']">
                  <slot v-if="fKey in deal && fKey in dealfieldsinfo">

                    <slot
                    v-if="(deal[fKey] || deal[fKey].length > 0) ||
                    (cardV['sectAlwaysShowFields'].indexOf(fKey) !== -1 || settings['arFileUploadFields'].indexOf(fKey) !== -1)"
                    >
                    <div class="section-field-item">
                      <div class="section-field-title">
                        <slot v-if="fVal['formLabel']">{{fVal['formLabel']}}</slot>
                        <slot v-else-if="fVal['filterLabel']">{{fVal['filterLabel']}}</slot>
                        <slot v-else-if="fVal['listLabel']">{{fVal['listLabel']}}</slot>
                        <slot v-else-if="fVal['title']">{{fVal['title']}}</slot>
                        <slot v-else>{{fKey}}</slot>
                      </div>
                      <div class="section-field-item-container">
                        <slot v-if="!deal[fKey]">
                          <span class="section-item-muted">{{settings['emptyDataMsg']}}</span>
                        </slot>
                        <slot v-else-if="deal[fKey].length === 0">
                          <span class="section-item-muted">{{settings['emptyDataMsg']}}</span>
                        </slot>
                        <slot v-else>
                          <slot v-if="dealfieldsinfo[fKey]['type'] === 'crm_status'">
                            <slot v-if="statuses[deal[fKey]]">{{statuses[deal[fKey]]}}</slot>
                            <slot v-else>{{deal[fKey]}}</slot>
                          </slot>
                          <slot v-else-if="dealfieldsinfo[fKey]['type'] === 'file'">
                            <slot v-if="dealfieldsinfo[fKey]['isMultiple']">
                              <slot v-if="deal[fKey].length > 0">
                                <slot v-for="fileId in deal[fKey]">
                                  <slot v-if="files[fileId]">
                                    <a
                                    target="_blank"
                                    :href="files[fileId]['SRC']"
                                    class="item-link"
                                    >
                                    <slot v-if="files[fileId]['CONTENT_TYPE'] === 'image/png' || files[fileId]['CONTENT_TYPE'] === 'image/jpeg'">
                                      <img
                                      class="item-image"
                                      :src="files[fileId]['SRC']"
                                      :alt="files[fileId]['FILE_NAME']"
                                      />
                                    </slot>
                                    <slot v-else>{{files[fileId]['FILE_NAME']}}</slot>
                                  </a>
                                </slot>
                              </slot>
                            </slot>
                          </slot>
                          <slot v-else>
                            <slot v-if="files[deal[fKey]]">
                              <a
                              target="_blank"
                              :href="files[deal[fKey]]['SRC']"
                              class="item-link"
                              >{{files[deal[fKey]]['FILE_NAME']}}</a>
                            </slot>
                          </slot>
                        </slot>
                        <slot v-else>
                          <slot v-if="dealfieldsinfo[fKey]['isMultiple']">
                            <slot v-for="v in deal[fKey]">
                              {{v}}<br>
                            </slot>
                          </slot>
                          <slot v-else>{{deal[fKey]}}</slot>
                        </slot>
                      </slot>
                    </div>
                    <slot v-if="settings['arFileUploadFields'].indexOf(fKey) !== -1">
                      <file-upload
                      :settings="settings" :field="fKey" :dealfieldsinfo="dealfieldsinfo"
                      :deal="deal['ID']" @deal-update="onDealUpdate"
                      />
                    </slot>
                  </div>
                </slot>

              </slot>
            </slot>
          </div>
        </div>
      </slot>
    </slot>
    <slot v-else>
      <slot v-for="(fVal,fKey) in showfieldsdefault">
        <slot v-if="fKey in deal && fKey in dealfieldsinfo">

          <div class="field-item">
            <div class="field-title">{{fVal}}:</div>
            <div class="field-item-container">
              <slot v-if="!deal[fKey]">
                <span class="item-muted">{{settings['emptyDataMsg']}}</span>
              </slot>
              <slot v-else-if="deal[fKey].length === 0">
                <span class="item-muted">{{settings['emptyDataMsg']}}</span>
              </slot>
              <slot v-else>
                <slot v-if="dealfieldsinfo[fKey]['type'] === 'crm_status'">
                  <slot v-if="statuses[deal[fKey]]">{{statuses[deal[fKey]]}}</slot>
                  <slot v-else>{{deal[fKey]}}</slot>
                </slot>
                <slot v-else-if="dealfieldsinfo[fKey]['type'] === 'file'">
                  <slot v-if="dealfieldsinfo[fKey]['isMultiple']">
                    <slot v-if="deal[fKey].length > 0">
                      <slot v-for="fileId in deal[fKey]">
                        <slot v-if="files[fileId]">
                          <a
                          target="_blank"
                          :href="files[fileId]['SRC']"
                          class="item-link"
                          >
                          <slot v-if="files[fileId]['CONTENT_TYPE'] === 'image/png'">
                            <img
                            class="item-image"
                            :src="files[fileId]['SRC']"
                            :alt="files[fileId]['FILE_NAME']"
                            />
                          </slot>
                          <slot v-else>{{files[fileId]['FILE_NAME']}}</slot>
                        </a>
                      </slot>
                    </slot>
                  </slot>
                </slot>
                <slot v-else>
                  <slot v-if="files[deal[fKey]]">
                    <a
                    target="_blank"
                    :href="files[deal[fKey]]['SRC']"
                    class="item-link"
                    >{{files[deal[fKey]]['FILE_NAME']}}</a>
                  </slot>
                </slot>
              </slot>
              <slot v-else>{{deal[fKey]}}</slot>
            </slot>
          </div>
        </div>

      </slot>
    </slot>
  </slot>
</div>

<div class="deal-page-side">
  <deal-chat
  @user-title="userTitle" @disk-files-data="onDiskFilesData"
  :login="login" :deal="deal['ID']" :settings="settings" :users="users" :member="member" :diskdata="diskdata" :bxmember="member"
  />
</div>
</div>
</div>
</div>
</script>
<script type="text/x-template" id="deal-chat">
  <div class="deal-page-chat">
    <div class="comments-top">{{settings['chatTitle']}}:</div>
    <div
    class="comments-container"
    :class="{'comments-container-has-items': (Object.keys(chatData).length > 0)}"
    >
    <slot v-if="Object.keys(chatData).length > 0">
      <slot v-for="(fVal,fKey) in chatData">
        <div class="chat-item">
          <div class="chat-item-head">
            <span class="chat-item-author">
              <span>{{settings['chatAuthorTitle']}}: </span>
              <span>
                <slot v-if="userNames[fVal['AUTHOR_ID']]">
                  {{userNames[fVal['AUTHOR_ID']]}}
                </slot>
                <slot v-else>
                  {{fVal['AUTHOR_ID']}}
                </slot>
              </span>
            </span>
            <span class="spacing-15"></span>
            <span class="chat-item-time item-muted">
              <slot v-if="fVal['CREATED']">
                <slot v-if="fVal['CREATED'].length > 0">{{fVal['CREATED']}}</slot>
              </slot>
            </span>
          </div>
          <div class="chat-item-content">{{fVal['COMMENT']}}</div>
          <slot v-if="fVal['FILES']">
            <div class="chat-item-attached">
              <span class="chat-item-attached-title item-muted">{{settings['chatAttachedTitle']}}:</span>
              <slot v-for="(fileVal,fileKey) in fVal['FILES']">
                <span class="attached-item">
                  <slot v-if="diskFiles[fileKey]">
                    <a
                    target="_blank"
                    :href="diskFiles[fileKey]"
                    >{{fileVal['name']}}</a>
                  </slot>
                  <slot v-else>{{fileVal['name']}}</slot>
                </span>
              </slot>
            </div>
          </slot>
        </div>
      </slot>
    </slot>
    <slot v-else>
      <div class="item-muted">{{settings['emptyDataMsg']}}</div>
    </slot>
  </div>
  <div class="comments-bottom">
    <textarea
    id="comment-field"
    rows="3"
    :placeholder="settings['chatPlaceholder']"
    v-model="inputMessage"
    @keyup="commentInput"
    ></textarea>
    <slot v-if="Object.keys(inputFiles).length > 0">
      <div class="comment-add-files">
        <slot v-for="(fsVal,fsKey) in inputFiles">
          <div
          :id="'item-id-'+fsKey"
          class="comment-add-files-item"
          >
          <input
          class="comment-add-files-item-field"
          :id="'comment-add-file-'+fsKey"
          type="file"
          @change="onCommentFileInput"
          >
          <input
          type="submit"
          :value="settings.buttons['removeFile']"
          class="comment-add-files-item-btn-remove"
          :id="'comment-remove-file-'+fsKey"
          @click="removeCommentFile"
          >
        </div>
      </slot>
    </div>
  </slot>
  <div class="chat-buttons">
    <slot v-if="stateSendingMessage">
      <span class="chat-loader">
        <span class="chat-btn-loader loader"></span>
      </span>
    </slot>
    <slot v-else>
      <input
      type="submit"
      :value="settings.buttons['sendMessage']"
      class="chat-btn-send"
      @click="chatSend"
      >
      <span class="spacing-btn"></span>
      <input
      type="submit"
      :value="settings.buttons['addFile']"
      class="chat-btn"
      @click="addCommentFile"
      >
    </slot>
    <span class="spacing-btn"></span>
    <input
    type="submit"
    :value="settings.buttons['cancelMessage']"
    class="chat-btn-cancel"
    @click="chatCancel"
    >
  </div>
</div>
<deal-tickets
v-bind:login="login"
v-bind:deal="deal"
v-bind:settings="settings"
v-bind:users="users"
v-bind:member="member"
v-bind:bxmember="member"
/>
</div>
</script>

<script type="text/x-template" id="deal-tickets">
  <?php include_once 'components/deal-tickets.php'; ?>
</script>

<script type="text/x-template" id="status-bar">
  <div
  class="status-bar"
  :class="{'status-bar-list': type === 'list', 'status-bar-deal': type === 'deal'}"
  >
  <div class="status-items">
    <slot v-for="(data, key) in statuslist">
      <slot v-if="['S','F'].indexOf(data['SEMANTICS']) === -1">
        <div
        class="status-item"
        :style='{"background-color": listStagesColors[key]}'
        :data-id="data['STATUS_ID']"
        @mouseover="itemHover"
        @mouseleave="itemLeave"
        >
        <slot v-if="type === 'deal'">{{data['NAME']}}</slot>
      </div>
    </slot>
  </slot>
  <slot v-if="['S','F'].indexOf(currentStageData['SEMANTICS']) !== -1 && currentStageIdx">
    <div
    class="status-item"
    :style='{"background-color": listStagesColors[currentStageIdx]}'
    :data-id="currentStageData['STATUS_ID']"
    @mouseover="itemHover"
    @mouseleave="itemLeave"
    >
    <slot v-if="type === 'deal'">{{currentStageData['NAME']}}</slot>
  </div>
</slot>
<slot v-else>
  <div
  class="status-item"
  :style='{"background-color": (type === "deal") ? emptyPageStageColor : emptyListStageColor}'
  :data-id="'final'"
  @mouseover="itemHover"
  @mouseleave="itemLeave"
  >
  <slot v-if="type === 'deal'">{{finaltext}}</slot>
</div>
</slot>
</div>
<slot v-if="type === 'list'">
  <div class="status-bar-stage-title">
    <slot v-if="statusnames[dealstatus]">{{statusnames[dealstatus]}}</slot>
    <slot v-else>{{dealstatus}}</slot>
  </div>
</slot>
</div>
</script>
<script type="text/x-template" id="file-upload">
  <div class="field-file-upload">
    <slot v-if="Object.keys(inputFiles).length > 0">
      <div class="field-add-files">
        <slot v-for="(fsVal,fsKey) in inputFiles">
          <div
          :id="'field-item-id-'+fsKey+'-field-'+field"
          class="field-add-files-item"
          >
          <input
          class="field-add-files-item-field"
          type="file"
          :data-id="fsKey"
          @change="onFieldFileInput"
          >
          <input
          type="submit"
          :value="settings.buttons['removeFile']"
          :data-id="fsKey"
          class="field-add-files-item-btn-remove"
          @click="removeFieldFile"
          >
        </div>
      </slot>
    </div>
  </slot>
  <div class="field-buttons">
    <slot v-if="stateSendingField">
      <span class="field-loader">
        <span class="field-btn-loader loader"></span>
      </span>
    </slot>
    <slot v-else>
      <slot v-if="Object.keys(inputFiles).length > 0">
        <input
        type="submit"
        :value="settings.buttons['sendMessage']"
        class="field-btn-send"
        @click="fieldSend"
        >
        <span class="field-spacing-btn"></span>
      </slot>
      <input
      type="submit"
      :value="settings.buttons['addFile']"
      class="field-btn"
      @click="addFieldFile"
      >
    </slot>
    <slot v-if="Object.keys(inputFiles).length > 0">
      <span class="field-spacing-btn"></span>
      <input
      type="submit"
      :value="settings.buttons['cancelMessage']"
      class="field-btn-cancel"
      @click="fieldCancel"
      >
    </slot>
  </div>
</div>
</script>
<script type="text/x-template" id="top-links">
  <div class="top-links">
    <div class="links-logo">
      <a :href="settings['topLogoLink']['href']">
        <img
        :src="settings['topLogoLink']['src']"
        :width="settings['topLogoLink']['width']"
        :height="settings['topLogoLink']['height']"
        alt="logo"
        />
      </a>
    </div>
    <div class="links-menu">
      <slot v-for="(link, idx) in settings['topMenuLinks']">
        <div class="links-menu-item">
          <a :href="link['href']">
            <div
            :data-id="idx"
            class="links-menu-item-content"
            @mouseover="onHover"
            @mouseleave="onLeave"
            >
            {{link['title']}}
            <slot v-if="link['children'].length > 0">
              <span class="link-arrow"></span>
            </slot>
          </div>
        </a>
      </div>
    </slot>
  </div>
</div>
</script>

<div id="app">
  <slot v-if="openPage === 'deal-page'">
    <deal-page
    @user-title="userTitle" @logout="logOut" @back-to-list="backToList" @disk-files-data="onDiskFilesData" @deal-update="onDealUpdate"
    :login="userLogin" :deal="openDealData" :settings="settings" :statuses="statusNames" :statuslist="arStatus" :files="filesData" :diskdata="diskFilesData"
    :users="userNames" :member="bxMemberId"
    :card="dealCardInfo" :dealfieldsinfo="dealFieldsInfo" :showfieldsdefault="showListFields"
    />
  </slot>
  <slot v-else-if="openPage === 'deal-list'">
    <deal-list
    @logout="logOut" @open-deal="openDeal"
    :login="userLogin" :list="dealsData" :settings="settings" :statuses="statusNames" :statuslist="arStatus" :files="filesData"
    :defaultcard="defaultDealFieldsInfo" :showfields="showListFields"
    />
  </slot>
  <slot v-else>
    <user-login
    @user-data="pageListDeals" @check-login-fields="getDealFieldsInfo"
    :settings="settings" :canlogin="loginFieldsExist" :selectfields="selectFields"
    />
  </slot>
</div>

<script>
  var data = JSON.parse('<?=$data?>');

  Vue.component('user-login', {
    props: ['settings', 'canlogin', 'selectfields'],
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

<?php include_once 'components/deal-list_js.php' ?>
<script>
  Vue.component('deal-page', {
    props: ['login', 'deal', 'settings', 'statuses', 'statuslist', 'files', 'users', 'member', 'diskdata', 'card', 'dealfieldsinfo', 'showfieldsdefault'],
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
  });


  Vue.component('deal-chat', {
    props: ['login', 'deal', 'settings', 'users', 'member', 'diskdata', 'bxmember'],
    data: function () {
      return {
        inputMessage: '',
        inputFiles: {},
        chatData: {},
        userNames: {},
        requestUrl: this.settings['apiUrl'],
        chatDataMethod: this.settings['methods']['chatDataMethod'],
        chatMessageMethod: this.settings['methods']['chatMessageMethod'],
        userNamesMethod: this.settings['methods']['userNamesMethod'],
        diskFilesDataMethod: this.settings['methods']['diskFilesDataMethod'],
        chatInterval: null,
        stateSendingMessage: false,
        messageId: null,
        diskFiles: {},
        countMessages: 0,
        gettingData: false,
      };
    },
    methods: {
      getChatData(scrollTop = false, start = 0, tmpData = [])
      {
        if (!this.bxmember) return;
        if (this.gettingData && start === 0) return;
        var chatContainer = document.querySelector('.deal-page-chat');
        if (!chatContainer) {
          if (this.chatInterval) clearInterval(this.chatInterval);
          return;
        }
        this.gettingData = true;

        var obj = this;
        var dealId = parseInt(this.deal, 10);
        if (isNaN(dealId)) dealId = 0;
        if (dealId === 0) return;

        var url = this.requestUrl + this.chatDataMethod;
        var body = {};
        var filter = {};
        filter['ENTITY_ID'] = dealId;
        filter['ENTITY_TYPE'] = 'deal';
        filter['AUTHOR_ID'] = this.bxmember.toString();
        body['filter'] = filter;
        body['order'] = {'CREATED': 'DESC'};
        if (start > 0) body['start'] = start;
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

          var next = 0;
          if (data['next']) {
            next = parseInt(data['next'], 10);
            if (isNaN(next)) next = 0;
          }

          var result = data.result;
          if (result) {
            if (result.length > 0) {
              var newResult = [];
              for (var l = 0; l < result.length; l++)
              {
                var item = result[l];
                if (item['AUTHOR_ID'].toString() === obj.bxmember.toString()) {
                  newResult.push(item);
                }
              }
              result = newResult;

              if (next > 0) {
                var sumRes = tmpData.concat(result);
                setTimeout(function () {
                  obj.getChatData(false, next, sumRes);
                }, 100);
                return;
              }
              if (tmpData.length > 0) result = tmpData.concat(result);

              obj.chatData = result.reverse();
              obj.gettingData = false;

              var commentContainer = document.querySelector('.comments-container');

              if (scrollTop || obj.messageId > 0) {
                setTimeout(function () {
                  if (commentContainer) {

                    obj.messageId = null;
                    obj.stateSendingMessage = false;
                    obj.inputMessage = '';
                    commentContainer.scrollTop = commentContainer.scrollHeight;
                  }
                }, 50);
              }

              var countMessages = Object.keys(obj.chatData).length;
              if (commentContainer && countMessages !== obj.countMessages) {

                setTimeout(function () {
                  commentContainer.scrollTop = commentContainer.scrollHeight;
                }, 50);
              }
              obj.countMessages = countMessages;

            }
          }
        })
        .catch(function(error) {
          console.log('Request failed', error);
        });
        obj.gettingData = false;
      },
      getChatUsers(newUserId)
      {
        var obj = this;
        var url = this.requestUrl + this.userNamesMethod;
        var body = {};
        body['ID'] = newUserId;
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
            if (Object.keys(data.result).length > 0) {

              for (var i = 0; i < data.result.length; i++)
              {
                var userTitle = '';
                var userData = data.result[i];

                var id = userData['ID'];
                var name = userData['NAME'];
                var lastName = userData['LAST_NAME'];
                var email = userData['EMAIL'];

                if (name) userTitle = name;
                if (lastName) userTitle += lastName;
                if (!name && !lastName && email) userTitle = email;
                if (userTitle.length === 0) userTitle = id;

                if (userTitle.length > 0 && id) obj.userNames[id] = userTitle;
                obj.$emit('user-title', {id: id, userTitle: userTitle});

              }
            }
          }
        })
        .catch(function(error) {
          console.log('Request failed', error);
        });
      },
      getDickFilesData(newDiskFiles)
      {
        var url = this.requestUrl + this.diskFilesDataMethod;
        var body = {};
        body['diskObjects'] = newDiskFiles;
        body = JSON.stringify(body);

        var obj = this;
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

          var filesData = {};
          if (data['result']) {
            if (data['result']['filesData']) {
              filesData = data['result']['filesData'];
            }
          }

          if (Object.keys(filesData).length > 0) {
            var changed = false;
            for (var k = 0; k < Object.keys(filesData).length; k++)
            {
              var fileObjId = parseInt(Object.keys(filesData)[k], 10);
              if (isNaN(fileObjId)) fileObjId = 0;

              var fileObjData = Object.values(filesData)[k];

              if (fileObjId > 0 && fileObjData && !obj.diskFiles[fileObjId]) {
                obj.diskFiles[fileObjId] = fileObjData;
                changed = true;
              }
            }

            if (changed) {
              obj.$emit('disk-files-data', {diskFilesData: obj.diskFiles});
            }
          }
        })
        .catch(function(error) {
          console.log('Request failed', error);
        });
      },
      commentInput(event)
      {
        var elem = event.target;
        if (elem) {
          if (elem.value.length === 0) {
            if (!elem.classList.contains('comment-field-error')) {
              elem.classList.add('comment-field-error');
            }
          } else {
            if (elem.classList.contains('comment-field-error')) {
              elem.classList.remove('comment-field-error');
            }
          }
        }
      },
      chatSend()
      {
        var obj = this;
        var dealId = parseInt(this.deal, 10);
        if (isNaN(dealId)) dealId = 0;

        var userId = this.member;
        if (userId) userId = parseInt(userId, 10);
        if (isNaN(userId)) userId = 0;

        var msgText = this.inputMessage;

        var files = this.inputFiles;
        var msgFiles = [];
        if (files) {
          for (var n = 0; n < Object.keys(this.inputFiles).length; n++)
          {
            var fKey = Object.keys(this.inputFiles)[n];
            var fVal = Object.values(this.inputFiles)[n];

            if (fKey) {
              var itemContainer = document.getElementById('item-id-'+fKey);
              if (itemContainer) {
                if (itemContainer.className !== 'item-disabled comment-add-files-item') {

                  if (fVal) {
                    msgFiles.push(fVal);
                  }
                }
              }
            }
          }
        }

        var commentField = document.getElementById('comment-field');
        if (commentField) {
          if (msgText.length === 0) {
            if (!commentField.classList.contains('comment-field-error')) {
              commentField.classList.add('comment-field-error');
            }
          } else {
            if (commentField.classList.contains('comment-field-error')) {
              commentField.classList.remove('comment-field-error');
            }
          }
        }

        if (msgText.length > 0 && userId > 0 && dealId > 0) {
          this.stateSendingMessage = true;

          var url = this.requestUrl + this.chatMessageMethod;
          var body = {};
          body['fields'] = {
            'ENTITY_ID': dealId,
            'ENTITY_TYPE': 'deal',
            'COMMENT': msgText,
            'AUTHOR_ID': userId,
          };
          if (msgFiles.length > 0) {
            body['fields']['FILES'] = msgFiles;
          }
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

            var result = data.result;
            if (result) {
              result = parseInt(result, 10);
              if (isNaN(result)) result = 0;

              if (result > 0) {
                obj.messageId = result;
                obj.inputFiles = {};
              }
            }
          })
          .catch(function(error) {
            console.log('Request failed', error);
          });
        }
      },
      chatCancel()
      {
        this.inputMessage = '';
        this.inputFiles = {};
        var elem = document.getElementById('comment-field');
        if (elem) {
          elem.style.height = '72px';

          if (elem.classList.contains('comment-field-error')) {
            elem.classList.remove('comment-field-error');
          }
        }
      },
      addCommentFile()
      {
        var files = {};
        var num = 0;
        if (Object.keys(this.inputFiles).length > 0) {
          for (var i = 0; i < Object.keys(this.inputFiles).length; i++)
          {
            files['n'+num] = Object.values(this.inputFiles)[i];
            num++;
          }
        }
        files['n'+num] = '';
        this.inputFiles = files;
      },
      removeCommentFile(event)
      {
        var elem = event.target;
        var elemKey = elem.id.replace(/comment-remove-file-/, '');

        var itemContainer = document.getElementById('item-id-'+elemKey);
        if (itemContainer) {
          itemContainer.className = 'item-disabled comment-add-files-item';
        }
      },
      onCommentFileInput(event)
      {
        var obj = this;
        var elem = event.target;
        if (elem) {

          var elemKey = elem.id.replace(/comment-add-file-/, '');

          var fileData = null;
          if (elem.files) {
            fileData = elem.files[0];
          }
          var fileName = '';
          if (fileData) {
            fileName = fileData['name'];
          }

          if (fileData) {

            var reader = new FileReader();
            reader.readAsDataURL(fileData);
            reader.onloadend = function () {

              var dataEncoded = reader.result;
              var res = dataEncoded.split(';');
              var content = res[1].split(',')[1];

              if (content && fileName) {
                obj.inputFiles[elemKey] = [fileName, content];
              }
            };
          }

        }
      },
    },
    mounted() {
      this.userNames = this.users;
      this.diskFiles = this.diskdata;
      this.getChatData(true);

      var obj = this;
      if (this.chatInterval) {
        clearInterval(this.chatInterval);
      }
      if (top.MemberloginChatInterval) {
        clearInterval(top.MemberloginChatInterval);
      }

      var chatContainer = document.querySelector('.deal-page-chat');
      if (chatContainer) {

        if (!this.chatInterval && this.deal) {
          this.chatInterval = top.MemberloginChatInterval = setInterval(function () {
            obj.getChatData();
          }, 2000);
        }
      }
    },
    watch: {
      chatData(newW, oldW) {
        if (Object.keys(newW).length > 0) {

          var newAuthors = [];
          var newDiskFiles = [];
          for (var i = 0; i < Object.keys(newW).length; i++)
          {
            var msgIdx = Object.keys(newW)[i];
            var chatMsg = Object.values(newW)[i];
            if (chatMsg) {
              var authorId = parseInt(chatMsg['AUTHOR_ID'], 10);
              if (isNaN(authorId)) authorId = 0;

              if (authorId > 0 && !this.userNames[authorId] && newAuthors.indexOf(authorId) === -1) {
                newAuthors.push(authorId);
              }

              var msgDate = chatMsg['CREATED'];
              if (msgDate) {
                if (msgDate.length > 0) {
                  msgDate = ((new Date(msgDate)).toLocaleDateString())+' '+((new Date(msgDate)).toLocaleTimeString().replace(/.\d+$/, ''));
                  this.chatData[msgIdx]['CREATED'] = msgDate;
                }
              }

              var files = chatMsg['FILES'];
              if (files) {
                var diskFilesId = Object.keys(files);

                if (diskFilesId.length > 0) {
                  for (var m = 0; m < diskFilesId.length; m++)
                  {
                    var diskObjId = parseInt(diskFilesId[m], 10);
                    if (isNaN(diskObjId)) diskObjId = 0;

                    if (diskObjId > 0 && !this.diskFiles[diskObjId] && newDiskFiles.indexOf(diskObjId) === -1) {
                      newDiskFiles.push({id: diskObjId, authorId: authorId});
                    }
                  }
                }

              }
            }
          }

          if (newAuthors.length > 0) {
            this.getChatUsers(newAuthors);
          }

          if (newDiskFiles.length > 0) {
            this.getDickFilesData(newDiskFiles);
          }

        }
      },
    },
    template: '#deal-chat',
  });

</script>

<?php include_once 'components/deal-tickets_js.php'; ?>

<script>

Vue.component('status-bar', {
  props: ['statuslist', 'statusnames', 'dealstatus', 'type', 'finaltext'],
  data: function () {
    return {
      currentStageIdx: null,
      currentStageData: {},
      emptyListStageColor: '#fff',
      emptyPageStageColor: '#D3D7DC',
      defaultColor: '#39A8EF',
      listStagesColors: {},
      hoverItemId: '',
      tooltipElem: null,
    };
  },
  methods: {
    itemHover(event)
    {
      var elem = event.target;
      var stageId = elem.getAttribute('data-id');
      this.hoverItemId = stageId;

      if (this.tooltipElem) {
        this.tooltipElem.remove();
        this.tooltipElem = null;
      }

      var text = '';
      if (!stageId && !this.statusnames) return;
      if (stageId === 'final') {
        text = this.finaltext;
      } else {
        text = this.statusnames[stageId];
      }
      if (!text) return;
      if (text.length === 0) return;

      this.tooltipElem = document.createElement('div');
      this.tooltipElem.className = 'status-bar-tooltip';
      this.tooltipElem.innerHTML = text;

      document.body.append(this.tooltipElem);

      var coords = elem.getBoundingClientRect();

      var left = coords.left + (elem.offsetWidth - this.tooltipElem.offsetWidth) / 2;
      if (left < 0) left = 0;

      var offsetTop = 20;
      if (this.type === 'deal') offsetTop = 40;

      var top = coords.top + offsetTop;
      if (top + this.tooltipElem.offsetHeight > window.innerHeight) {
        top = coords.top - this.tooltipElem.offsetHeight - 5;
      }

      this.tooltipElem.style.left = left + 'px';
      this.tooltipElem.style.top = top + 'px';
    },
    itemLeave(event)
    {
      this.hoverItemId = '';
      if (this.tooltipElem) {
        this.tooltipElem.remove();
        this.tooltipElem = null;
      }
    },
  },
  beforeMount() {
    var defaultColor = this.defaultColor;
    var emptyColor = this.emptyListStageColor;
    if (this.type === 'deal') emptyColor = this.emptyPageStageColor;

    for (var i = 0; i < this.statuslist.length; i++)
    {
      var statusIdx = parseInt(Object.keys(this.statuslist)[i], 10);
      var statusData = Object.values(this.statuslist)[i];

      if (this.dealstatus && (statusData['STATUS_ID'] === this.dealstatus)) {
        this.currentStageIdx = statusIdx;
        this.currentStageData = statusData;
      }

      this.listStagesColors[statusIdx] = emptyColor;
    }

    for (var k = 0; k < this.statuslist.length; k++)
    {
      if (!this.dealstatus) break;

      var idx = parseInt(Object.keys(this.statuslist)[k], 10);

      if (this.currentStageIdx !== null) {
        if (idx <= this.currentStageIdx) {
          this.listStagesColors[idx] = (this.currentStageData['COLOR']) ? this.currentStageData['COLOR'] : defaultColor;
        }
      }
    }
  },
  template: '#status-bar',
});

Vue.component('file-upload', {
  props: ['settings', 'field', 'dealfieldsinfo', 'deal'],
  data: function () {
    return {
      inputFiles: {},
      stateSendingField: false,
      requestUrl: this.settings['apiUrl'],
      fileUploadMethod: this.settings['methods']['fileUploadMethod'],
    };
  },
  methods: {
    fieldSend()
    {
      if (!this.dealfieldsinfo || !this.field) return;
      var info = this.dealfieldsinfo[this.field];
      if (!info) return;
      var isMultiple = info['isMultiple'];

      var obj = this;
      var dealId = parseInt(this.deal, 10);
      if (isNaN(dealId)) dealId = 0;
      var field = this.field;

      var files = this.inputFiles;
      var updFiles = [];
      if (files) {
        if (isMultiple) {
          for (var n = 0; n < Object.keys(this.inputFiles).length; n++)
          {
            var fKey = Object.keys(this.inputFiles)[n];
            var fVal = Object.values(this.inputFiles)[n];

            if (fKey) {
              var itemContainer = document.getElementById('field-item-id-'+fKey+'-field-'+field);
              if (itemContainer) {
                if (itemContainer.className !== 'field-item-disabled field-add-files-item') {

                  if (fVal) {
                    updFiles.push({fileData: fVal});
                  }
                }
              }
            }
          }
        } else {
          var fData = Object.values(this.inputFiles)[0];
          if (fData) updFiles = {fileData: fData};
        }
      }

      if (Object.keys(updFiles).length > 0 && dealId > 0 && field) {
        this.stateSendingField = true;

        var url = this.requestUrl + this.fileUploadMethod;
        var fields = {};
        fields[field] = updFiles;
        var body = {
          id: dealId,
          fields: fields,
        };
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

          obj.inputFiles = {};
          obj.stateSendingField = false;

          var result = data.result;
          if (result) {
            obj.$emit('deal-update', {dealId: dealId, field: field});
          }
        })
        .catch(function(error) {
          console.log('Request failed', error);
        });
      }
    },
    fieldCancel()
    {
      this.inputFiles = {};
    },
    addFieldFile()
    {
      if (!this.dealfieldsinfo || !this.field) return;
      var info = this.dealfieldsinfo[this.field];
      if (!info) return;
      var isMultiple = info['isMultiple'];

      if (!isMultiple && Object.keys(this.inputFiles).length > 0) return;

      var files = {};
      var num = 0;
      if (Object.keys(this.inputFiles).length > 0) {
        for (var i = 0; i < Object.keys(this.inputFiles).length; i++)
        {
          files['n'+num] = Object.values(this.inputFiles)[i];
          num++;
        }
      }
      files['n'+num] = '';
      this.inputFiles = files;
    },
    removeFieldFile(event)
    {
      if (!this.dealfieldsinfo || !this.field) return;
      var info = this.dealfieldsinfo[this.field];
      if (!info) return;
      var isMultiple = info['isMultiple'];

      if (!isMultiple) {
        this.inputFiles = {};
        return;
      }

      var elem = event.target;
      var elemKey = elem.dataset.id;

      var itemContainer = document.getElementById('field-item-id-'+elemKey+'-field-'+this.field);
      if (itemContainer) {
        itemContainer.className = 'field-item-disabled field-add-files-item';
      }

      var checkedElems = [];
      for (var i = 0; i < Object.keys(this.inputFiles).length; i++)
      {
        var key = Object.keys(this.inputFiles)[i];

        var item = document.getElementById('field-item-id-'+key+'-field-'+this.field);
        if (item) {
          if (!item.classList.contains('field-item-disabled')) checkedElems.push(key);
        }
      }
      if (checkedElems.length === 0) this.inputFiles = {};
    },
    onFieldFileInput(event)
    {
      var obj = this;
      var elem = event.target;
      if (elem) {

        var elemKey = elem.dataset.id;
        if (!elemKey) return;

        var fileData = null;
        if (elem.files) {
          fileData = elem.files[0];
        }
        var fileName = '';
        if (fileData) {
          fileName = fileData['name'];
        }

        if (fileData) {

          var reader = new FileReader();
          reader.readAsDataURL(fileData);
          reader.onloadend = function () {

            var dataEncoded = reader.result;
            var res = dataEncoded.split(';');
            var content = res[1].split(',')[1];

            if (content && fileName) {
              obj.inputFiles[elemKey] = [fileName, content];
            }
          };
        }

      }
    },
  },
  template: '#file-upload',
});

Vue.component('top-links', {
  props: ['settings'],
  data: function () {
    return {
      tooltipElem: null,
    };
  },
  methods: {
    onHover(event)
    {
      if (this.tooltipElem) {
        this.removeTooltip();
      }

      var elem = event.target;
      var linkDataKey = parseInt(elem.getAttribute('data-id'), 10);
      if (isNaN(linkDataKey)) return;

      var linkData = {};
      if (this.settings['topMenuLinks']) {
        linkData = this.settings['topMenuLinks'][linkDataKey];
      }
      if (typeof linkData === "undefined" || linkData === null) return;

      var children = linkData['children'];
      if (typeof children === "undefined" || children === null) return;
      if (Object.keys(children).length === 0) return;

      var text = '';
      for (var i = 0; i < Object.keys(children).length; i++)
      {
        var data = Object.values(children)[i];
        if (!data) continue;
        var href = data['href'];
        var title = data['title'];

        if (href && title) {
          text += '<a href="'+href+'">'+title+'</a>';
        }
      }
      if (text.length === 0) return;

      this.tooltipElem = document.createElement('div');
      this.tooltipElem.className = 'links-menu-tooltip';
      this.tooltipElem.innerHTML = text;

      document.body.append(this.tooltipElem);
      this.tooltipElem.setAttribute('data-id', linkDataKey.toString());

      var obj = this;
      this.tooltipElem.addEventListener('mouseleave', function (event) {
        obj.onLeave(event);
      });

      var coords = elem.getBoundingClientRect();

      var left = coords.left;
      if (left < 0) left = 0;

      var top = coords.top + coords.height;
      if (top < 0) top = 0;

      this.tooltipElem.style.left = left + 'px';
      this.tooltipElem.style.top = top + 'px';
    },
    onLeave(event)
    {
      var elem = event.target;
      if (this.tooltipElem && elem) {
        if (elem === this.tooltipElem) this.removeTooltip();
      }
    },
    removeTooltip()
    {
      if (this.tooltipElem) {
        this.tooltipElem.remove();
        this.tooltipElem = null;
      }
    }
  },
  template: '#top-links',
});

var app = new Vue({
  el: '#app',
  data: {
    settings: data.settings,
    openPage: 'user-login',
    userLogin: '',
    userPassword: '',
    dealsData: [],
    arStatus: [],
    statusNames: {},
    openDealData: {},
    filesData: {},
    filesId: [],
    diskFilesData: {},
    userNames: {},
    bxMemberId: 0,
    loginFieldsExist: '',
    dealFieldsInfo: {},
    dealCardView: [],
    dealCardInfo: [],
    defaultDealFields: data['settings']['arDefaultDealFields'],
    defaultDealFieldsInfo: {},
    selectFields: [],
    requestUrl: data.settings['apiUrl'],
    filesDataMethod: data.settings['methods']['filesDataMethod'],
    memberRegisterMethod: data.settings['methods']['memberRegisterMethod'],
    cardViewMethod: data.settings['methods']['cardViewMethod'],
    fieldsMethod: data.settings['methods']['fieldsMethod'],
    getDealDataMethod: data.settings['methods']['getDealDataMethod'],
    showListFields: {},
  },
  methods: {
    pageListDeals(data)
    {
      this.userLogin = data['userLogin'];
      this.userPassword = data['userPassword'];
      this.dealsData = data['data'];
      this.arStatus = data['arStatus'];
      this.openPage = 'deal-list';
      this.openDealData = {};

      if (top.MemberloginChatInterval) {
        clearInterval(top.MemberloginChatInterval);
      }

      if (this.dealsData) {
        this.dealsData = this.getDealListFields();

        if (Object.keys(this.filesData).length === 0) {
          this.getFilesData(this.filesId);
        }

        if (Object.keys(this.dealsData).length > 0) {

          this.checkBitrixMemberUserId();
        }
      }
    },
    getDealListFields()
    {
      var data = this.dealsData;
      var result = [];
      for (var i = 0; i < data.length; i++)
      {
        var deal = data[i];
        var newDealData = {};

        for (var k = 0; k < Object.keys(this.dealFieldsInfo).length; k++)
        {
          var fieldCode = Object.keys(this.dealFieldsInfo)[k];
          var fieldInfo = Object.values(this.dealFieldsInfo)[k];

          var type = fieldInfo['type'];
          var multiple = (typeof fieldInfo['isMultiple'] === 'boolean') ? fieldInfo['isMultiple'] : fieldInfo['isMultiple'] === 'Y';

          if (fieldCode in deal) {
            var value = deal[fieldCode];
            if (value === null) value = '';

            if (value.length !== 0 && type === 'file') {
              if (multiple) {
                var newValue = [];
                for (var n = 0; n < value.length; n++)
                {
                  var fileElem = value[n];

                  var fileId;
                  if (typeof fileElem === 'number' || typeof fileElem === 'string') {
                    fileId = parseInt(fileElem, 10);
                    if (isNaN(fileId)) fileId = 0;
                  } else if (typeof fileElem === 'object' && fileElem !== null) {
                    fileId = fileElem.id;
                  }
                  if (typeof fileId !== 'undefined' && fileId > 0) {
                    this.filesId.push(fileId);
                    newValue.push(fileId);
                  }
                }
                value = newValue;
              } else {

                var fId;
                if (typeof value === 'number' || typeof value === 'string') {
                  fId = parseInt(value, 10);
                  if (isNaN(fId)) fId = 0;
                } else if (typeof value === 'object') {
                  fId = value.id;
                }
                if (typeof fId !== 'undefined' && fId > 0) {
                  this.filesId.push(fId);
                  value = fId;
                }
              }
            }

            if (value.length !== 0 && (type === 'date' || type === 'datetime')) {
              value = ((new Date(value)).toLocaleDateString())+' '+((new Date(value)).toLocaleTimeString().replace(/.\d+$/, ''));
            }

            newDealData[fieldCode] = value;
          }
        }
        result.push(newDealData);
      }
      return result;
    },
    getFilesData(filesId)
    {
      var obj = this;
      if (filesId.length > 0) {
        var url = this.requestUrl + this.filesDataMethod;
        var body = {id: filesId};
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
            if (data.result.files) {
              obj.filesData = data.result.files;
              obj.onFilesData(obj.filesData)
            }
          }
        })
        .catch(function(error) {
          console.log('Request failed', error);
        });
      }
    },
    getDealFieldsInfo(data)
    {
      this.loginFieldsExist = data['check'];

      if (this.loginFieldsExist) {
        var obj = this;
        var url = this.requestUrl + this.fieldsMethod;
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

          obj.dealFieldsInfo = (data.result) ? data.result : {};
          obj.getCardView();
        })
        .catch(function(error) {
          console.log('Request failed', error);
        });
      }
    },
    getCardView()
    {
      var listFields = Object.keys(this.dealFieldsInfo);
      if (listFields.length === 0) return;

      var url = this.requestUrl + this.cardViewMethod;
      var body = {};
      body['arDealFields'] = listFields;
      body = JSON.stringify(body);

      var obj = this;
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
          if (Object.keys(data.result).length > 0) {
            obj.dealCardView = data.result;

            var selectFields = [];

            var dealCardInfo = [];
            for (var i = 0; i < Object.keys(obj.dealCardView).length; i++)
            {
              var val = Object.values(obj.dealCardView)[i];
              var sectFields = val['sectFields'];
              var sectAlwaysShowFields = val['sectAlwaysShowFields'];

              var sectFieldsInfo = {};
              for (var k = 0; k < sectFields.length; k++)
              {
                var fName = sectFields[k];
                var info = obj.dealFieldsInfo[fName];
                if (info) {
                  if (fName === 'ID' || fName === 'STAGE_ID') {
                    sectFieldsInfo[fName] = info;
                  } else {
                    var type = info['type'];
                    if (type && obj.settings.arFieldTypes) {
                      if (obj.settings.arFieldTypes.indexOf(type) !== -1) {
                        sectFieldsInfo[fName] = info;
                      }
                    }
                  }
                }

                if (selectFields.indexOf(fName) === -1 && fName !== 'CONTACT_IDS') selectFields.push(fName);
              }

              if (Object.keys(sectFieldsInfo).length > 0) {
                var newCardInfo = {
                  sectName: val['sectName'],
                  sectTitle: val['sectTitle'],
                  sectFields: sectFieldsInfo,
                  sectAlwaysShowFields: sectAlwaysShowFields,
                };
                dealCardInfo.push(newCardInfo);
              }
            }

            if (selectFields.indexOf('ID') === -1) selectFields.push('ID');
            if (selectFields.indexOf('STAGE_ID') === -1) selectFields.push('STAGE_ID');
            for (var n = 0; n < obj.defaultDealFields.length; n++)
            {
              var defaultFieldName = obj.defaultDealFields[n];

              if (selectFields.indexOf(defaultFieldName) === -1) {
                selectFields.push(defaultFieldName);
              }

              var defInfo = obj.dealFieldsInfo[defaultFieldName];
              if (defInfo && !obj.defaultDealFieldsInfo[defaultFieldName]) {
                obj.defaultDealFieldsInfo[defaultFieldName] = defInfo;
              }
            }

            obj.selectFields = selectFields;
            obj.dealCardInfo = dealCardInfo;

            obj.showListFields = obj.getShowListFields();
          }
        }
      })
      .catch(function(error) {
        console.log('Request failed', error);
      });
    },
    getShowListFields()
    {
      var showFields = {};
      for (var i = 0; i < Object.values(this.defaultDealFieldsInfo).length; i++)
      {
        var fieldCode = Object.keys(this.defaultDealFieldsInfo)[i];
        var field = Object.values(this.defaultDealFieldsInfo)[i];
        var title = field['title'];
        if (field['formLabel']) {
          title = field['formLabel'];
        } else if (field['filterLabel']) {
          title = field['filterLabel'];
        } else if (field['listLabel']) {
          title = field['listLabel'];
        }
        showFields[fieldCode] = title;
      }
      return  showFields;
    },
    checkBitrixMemberUserId()
    {
      var login = this.userLogin;
      var password = this.userPassword;
      var memberId = parseInt(this.bxMemberId, 10);
      if (isNaN(memberId)) memberId = 0;

      if (memberId === 0 && login.length > 0 && password.length > 0) {

        var obj = this;
        var url = this.requestUrl + this.memberRegisterMethod;
        var body = {
          login: login,
          password: password,
        };
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

          var result = data.result;
          if (result) {

            var userId = result.id;
            if (userId) parseInt(userId, 10);
            if (userId > 0) obj.bxMemberId = userId;
          }

        })
        .catch(function(error) {
          console.log('Request failed', error);
        });
      }
    },
    openDeal(data)
    {
      var dealId = data.dealId;
      this.openDealData = {};
      for (var i = 0; i < this.dealsData.length; i++)
      {
        var item = this.dealsData[i];
        if (parseInt(item['ID'], 10) === parseInt(dealId, 10)) {

          this.openDealData = item;
          break;
        }
      }

      if (Object.keys(this.openDealData).length > 0) {
        this.openPage = 'deal-page';
      }
    },
    onFilesData(data)
    {
      var files = data['files'];
      if (files) {
        if (Object.keys(files).length > 0) {

          for (var i = 0; i < Object.keys(files).length; i++)
          {
            var fileVal = Object.values(files)[i];
            var fileKey = Object.keys(files)[i];

            if (fileVal['CONTENT_TYPE'] === 'image/png') {
              var imgHeight = parseInt(fileVal['HEIGHT'], 10);
              if (isNaN(imgHeight) || imgHeight < 1) imgHeight = 1;
              var imgWidth = parseInt(fileVal['WIDTH'], 10);
              if (isNaN(imgWidth) || imgWidth < 1) imgWidth = 1;

              files[fileKey]['HEIGHT'] = imgHeight;
              files[fileKey]['WIDTH'] = imgWidth;
            }
          }

          this.filesData = files;
        }
      }
    },
    onDiskFilesData(data)
    {
      if (data['diskFilesData']) {
        this.diskFilesData = data['diskFilesData'];
      }
    },
    backToList()
    {
      this.openPage = 'deal-list';
      this.openDealData = {};

      if (top.MemberloginChatInterval) {
        clearInterval(top.MemberloginChatInterval);
      }
    },
    logOut()
    {
      this.userLogin = '';
      this.userPassword = '';
      this.bxMemberId = 0;
      this.dealsData = [];
      this.openDealData = {};
      this.openPage = 'user-login';

      if (top.MemberloginChatInterval) {
        clearInterval(top.MemberloginChatInterval);
      }
    },
    userTitle(params)
    {
      var uId = params['id'];
      var name = params['userTitle'];
      if (uId && name) {

        if (!this.userNames[uId]) this.userNames[uId] = name;
      }
    },
    onDealUpdate(params)
    {
      var dealId = parseInt(params.dealId, 10);
      if (isNaN(dealId)) dealId = 0;
      var field = params.field;
      if (!field || dealId === 0) return;
      var fieldInfo = this.dealFieldsInfo[field];
      if (!fieldInfo) return;

      var obj = this;
      var url = this.requestUrl + this.getDealDataMethod;
      var body = {
        dealId: dealId,
        field: field,
        fieldInfo: fieldInfo,
      };
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

        var result = data.result;
        if (!result) return;
        var arDeal = result.arDeal;
        var field = result.field;
        var filesData = result.filesData;
        if (!arDeal || !field || !filesData) return;
        var dealId = parseInt(arDeal['ID'], 10);
        if (isNaN(dealId)) dealId = 0;
        if (dealId === 0) return;
        var fieldValue = arDeal[field];

        if (obj.openDealData) {
          var openDealId = parseInt(obj.openDealData['ID'], 10);
          if (isNaN(openDealId)) openDealId = 0;
          if (dealId === openDealId) {
            obj.openDealData[field] = fieldValue;
          }
        }

        if (obj.dealsData) {
          for (var i = 0; i < Object.keys(obj.dealsData).length; i++)
          {
            var dealIdx = Object.keys(obj.dealsData)[i];
            var dealValue = Object.values(obj.dealsData)[i];

            var dataDealId = parseInt(dealValue['ID'], 10);
            if (dataDealId !== dealId) continue;

            obj.dealsData[dealIdx][field] = fieldValue;
            break;
          }
        }

        var type = '';
        if (obj.dealFieldsInfo) {
          if (obj.dealFieldsInfo[field]) {
            type = obj.dealFieldsInfo[field]['type'];
          }
        }

        if (type === 'file' && fieldValue && obj.filesData) {
          for (var n = 0; n < Object.keys(filesData).length; n++)
          {
            var fileId = Object.keys(filesData)[n];
            var fileData = Object.values(filesData)[n];

            if (!obj.filesData[fileId]) {
              obj.filesData[fileId] = fileData;
            }
          }
        }

      })
      .catch(function(error) {
        console.log('Request failed', error);
      });
    },
  },
  watch: {
    arStatus(newW, oldW) {
      if (newW.length > 0) {
        for (var i = 0; i < newW.length; i++)
        {
          var statusItem = newW[i];

          if (!statusItem['ENTITY_ID'].match(/^DEAL_STAGE/)) continue;

          this.statusNames[statusItem['STATUS_ID']] = statusItem['NAME'];
        }
      }
    },
  },
});

</script>

