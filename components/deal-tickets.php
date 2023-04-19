
<div class="deal-page-chat">
  <div class="card p-2">
    <div class="card-header text-secondary bg-light">
     <div class="h3">Services</div>
   </div>

   <div class="card-body">

     <ul class="nav nav-tabs mb-3">
      <li class="nav-item" v-on:click="setActivTab('faq')">
        <a v-bind:class="faqTabClass" class="nav-link" href="#">
          FAQ`s
        </a>
      </li>
      <li class="nav-item" v-on:click="setActivTab('tickets')">
        <a v-bind:class="ticketsTabClass" class="nav-link" href="#">
          Service Ticket
        </a>
      </li>
    </ul>

    <div v-if="activTab=='faq'">
      <div v-for="(item, index) in ticketsFAQLIst" class="deal-tickets-row" 
      v-on:click="popupVisible=true; popUpContent(item)">
      <div>
        {{unixTimeConverter(item.DATE)}}
      </div>
      <div v-html="item.QUESTION"></div>
      <hr>
    </div>
  </div>

  <div class="card-body" v-else="activTab=='tickets'">
    <button v-on:click.prevent="addTicketPopupVisible=true" class="btn btn-outline-success">
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
      Neues Ticket hinzufügen
    </button>
    <hr>
    <div v-for="(item, index) in ticketsLIst" class="row">
      <div class="col-2">
        {{item.ID}}
      </div>
      <div class="col-5">
        {{item.TITLE}}
      </div>
      <div class="col-3">
        {{item.DATE_CREATE.slice(0,10)}}
      </div>
      <div class="col-2">
        {{item.STAGE_ID}}
      </div>
    </div>
  </div>

</div>
</div>

<div class="popup-wrapper" v-if="addTicketPopupVisible">
  <div class="popup-inner bg-light">
    <div class="text-end h3 p-1">
      <a v-on:click.prevent="addTicketPopupVisible=false" href="#" class="btn btn-outline-danger">
        <i class="fa fa-times" aria-hidden="true"></i>
      </a>
    </div>
    <form v-on:submit.prevent="addTicketFormSubmit" action="" method="post" id="addTicketForm" class="p-3">
      <div class="pt-2 pb-2">
        Service Grund:
      <select v-model="reason" class="form-select" required>
        <option></option>
        <option>Garantie Fall</option>
        <option>Reclamation</option>
      </select>
      </div>
      <div class="pt-2 pb-2">
        Priorität: 
      <select v-model="priority" class="form-select" required>
        <option></option>
        <option>Kritishe störung</option>
        <option>Störung</option>
        <option>unerhebliche Störung</option>
      </select>
      </div>
      <div class="pt-2 pb-2">
        Bemerkung:
      <textarea v-model="remark" class="form-control" required></textarea>
      </div>
      <div class="pt-2 pb-2">
         <button class="btn-outline-info btn w-100">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
      </button>
      </div>
    </form>
  </div>
</div>


<div class="popup-wrapper" v-if="popupVisible">
  <div class="popup-inner bg-light">
    <div class="text-end h3 p-1">
      <a href="#" class="btn btn-outline-danger" v-on:click.prevent="popupVisible=false">
        <i class="fa fa-times" aria-hidden="true"></i>
      </a>
    </div>
    <div class="p-5">
      <div><b>Frage:</b></div>
      <div v-html="contentPopup.QUESTION"></div>
      <hr>
      <div><b>Antwort:</b></div>
      <div v-html="contentPopup.ANSWER"></div>
    </div>   
  </div>
</div>
<hr>
login: {{login}}
<br>
deal: {{deal}}
<br>
settings: {{settings}}
<br>
users: {{users}}
<br>
member: {{member}}
<br>
bxmember: {{bxmember}}
</div>
