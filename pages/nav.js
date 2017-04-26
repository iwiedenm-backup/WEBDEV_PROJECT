document.getElementById("navMenu").innerHTML =
'<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">'+
    '<ul class="nav navbar-nav">'+
        '<li>'+
            '<a href="index.html">Home</a>'+
        '</li>'+
    '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>'+
    '<ul class="dropdown-menu">' +
    '<li><a href="About.html">Mission</a></li>'+
          '<li><a href="E-Board.html">E-Board</a></li>'+
          '<li><a href="Lab.html">AIMS Lab</a></li>'+
        '</ul>'+
      '</li>'   +
    '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Members<span class="caret"></span></a>'+
    '<ul class="dropdown-menu"> <li><a href="https://docs.google.com/forms/d/1pFrWwW4VCTxlGCZnyqK1x7Yw4IwztFe_K3NfEIeDR0A/edit">Prospective Members Application</a></li>'+
          '<li><a href="https://goo.gl/forms/TWRh7mSQBrb0y1OF3">E-Board Application</a></li>'
    + '</ul>'+
      '</li>' +
            '<li class="dropdown">'+
            '<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Events'+
            '<span class="caret"></span></a>'+
            '<ul class="dropdown-menu">'+
              '<li><a href="Events.html">Upcoming Events</a></li>'+
              '<li><a href="PastEvents.html">Past Events</a></li>'+
              '<li><a href="FAQs.html">FAQs</a></li>'
              + '</ul>'+
          '</li>'+
            '<li class="dropdown">'+
            '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact'+
            '<span class="caret"></span></a>'+
            '<ul class="dropdown-menu">'+
              '<li><a href="Contact.html">Help</a></li>'+
              '<li><a href="Professors.html">Professors</a></li>'+
              '<li><a href="Resources.html">Resources</a></li>'+
              '</ul>' +
        '</li>'+

'</div>';
