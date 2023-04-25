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

  <deal-tickets
  v-bind:login="login"
  v-bind:deal="deal"
  v-bind:settings="settings"
  />
</div>
</div>

</div>
</div>