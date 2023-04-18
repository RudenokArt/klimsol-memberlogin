<div>
  <link rel="stylesheet" href="css/deal-tickets.css">

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
    tickets
  </div>

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


res: {{ticketsFAQLIst}}
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

Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deserunt vel est natus quis harum officiis temporibus laboriosam ratione fugiat doloribus quisquam, non quas ea. Provident, fuga doloribus tenetur culpa.