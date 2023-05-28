

<div class="deal-list-page">
  <div class="header-menu-deals">
    <header-menu v-bind:logotip="logotip"/>
  </div>
  <div class="header-bg">
    <img src="img/deal-list/01.png" class="header-bg-main" alt="">
    <img src="img/deal-list/03.jpg" class="header-bg-right-top" alt="">
    <img src="img/deal-list/02.jpg" class="header-bg-right-bottom" alt="">
    <img src="img/deal-list/01.png" class="header-bg-left" alt="">
  </div>
  <a href="/" class="header-logo">
    <img src="img/deal-list/04.png" alt="">
  </a>
  <div class="content pb-5 deal-list-content">
    <div class="user-login-logout-wrapper">
     <div class="bg-secondary text-white text-center user-login-logout">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span class="m-2">{{login}}</span>
      <i class="fa fa-caret-down" aria-hidden="true"></i>
      <div class="user-logout text-info bg-light p-2 text-center">
        <span @click="logOut()">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          {{settings.buttons['logout']}}
        </span>
      </div>
    </div>
  </div>
  <div class="h3">
    {{content.post_title}}
  </div>
  <div class="h4">
    {{settings['dealListTitle']}}
  </div>

  <table class="deals-table">
    <tbody>
      <slot v-if="list.length > 0">
        <tr>
          <slot v-for="(fVal,fKey) in showfields">
            <td>
              <div class="table-head-item">{{fVal}}</div>
            </td>
          </slot>
        </tr>
        <slot v-for="deal in list">
          <tr @click="openItem(deal['ID'])" :data-id="deal['ID']" class="list-item">
            <slot v-for="(fVal,fKey,idx) in showfields">
              <td>
                <slot v-if="fKey in deal && fKey in defaultcard">
                  <div
                  class="list-item-container"
                  :class="{'deal-title': idx === 0}"
                  >

                  <slot v-if="defaultcard[fKey]['type'] === 'crm_status'">
                    <slot v-if="statuses[deal[fKey]]">
                      <status-bar
                      :statuslist="statuslist" :statusnames="statuses" :logotip="logotip"
                      :dealstatus="deal[fKey]" :type="'list'" :finaltext="settings['finalizeStatusTitle']"
                      />
                    </slot>
                    <slot v-else>{{deal[fKey]}}</slot>
                  </slot>
                  <slot v-else-if="defaultcard[fKey]['type'] === 'file'">
                    <slot v-if="defaultcard[fKey]['isMultiple'] === true">
                      <slot v-if="deal[fKey]">
                        <slot v-for="fileId in deal[fKey]">
                          <slot v-if="files[fileId]">
                            <span class="file-link">{{files[fileId]['FILE_NAME']}}</span>
                          </slot>
                        </slot>
                      </slot>
                    </slot>
                    <slot v-else>
                      <slot v-if="files[deal[fKey]]">
                        <span class="file-link">{{files[deal[fKey]]['FILE_NAME']}}</span>
                      </slot>
                    </slot>
                  </slot>
                  <slot v-else>{{deal[fKey]}}</slot>

                </div>
              </slot>
            </td>
          </slot>
        </tr>
      </slot>
    </slot>
    <slot v-else>
      <tr>
        <td>
          <div class="table-head-item">{{settings['emptyDataMsg']}}</div>
        </td>
      </tr>
    </slot>
  </tbody>
</table>

<div class="pt-5">
 {{content.post_content}}
</div>
<div class="signature">
  <img src="img/deal-list/sig.png" alt="klimsol-team">
</div>
</div>

</div>