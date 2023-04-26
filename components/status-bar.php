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