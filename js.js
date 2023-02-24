$(document).ready(function() {

  $('li:nth-child(1)').addClass('active');
  
  $(window).scroll(function() {
    // On ajoute une classe "active2" au header lorsque l'utilisateur commence à scroller
    if ($(this).scrollTop() > 0) {
      $('header').addClass('active2');
    } else {
      $('header').removeClass('active2');
    }
  
    // recup la hauteur totale de la page
    var pageHeight = $(document).height();
    // recup la position verticale actuelle de la fenêtre
    var scrollPosition = $(this).scrollTop();
    // calcul la hauteur d'une page
    var pageHeightVh = pageHeight / 5; // 5 pages 
    // calcul le numéro de la page et on ajoute un légé decalage
    var windowHeight = $(window).height();
    var page = Math.floor((scrollPosition + windowHeight * 0.2) / pageHeightVh);
    // ajou la classe active au li correspondant
    $('li').eq(page).addClass('active');
    // retire la classe active des autres li
    $('li').not(':eq(' + page + ')').removeClass('active');
    // ajou la classe active à la div correspondant à la page courante
    $('.page').eq(page).addClass('active');
    // retire la classe active des autres div
    $('.page').not(':eq(' + page + ')').removeClass('active');

    // active arrive a la troisieme page
    if (page >= 2) {
      $('nav').addClass('trois');
    }
    if (page < 2) {
      $('nav').removeClass('trois');
    }
  });

  //raj class active a bserved
  $('.bserved, header').addClass('active')

  //Rajouter class act sur la premiere slide
  $(".slider").addClass('active');


  $(".slider .navigation .navn").click(function() {
    // récupère la valeur de l'attribut id de l'élément cliqué
    var id = $(this).attr("id");
    // Faire bouger le slider
    if(id === "nav1"){
      $('.slidershow').addClass('active');
      $('.slidershow').removeClass('active2');
      setTimeout(function() {
        $('.slide2').removeClass('act');
      }, 1000); // rajoute un delais avant de retirer act pour que les animations commencent pas trop tot
    };
    if(id === "nav2"){
      $('.slidershow').removeClass('active');
      $('.slidershow').removeClass('active2');
      $('.slide2').addClass('act');
    };
    if(id === "nav3"){
      setTimeout(function() {
        $('.slide2').removeClass('act');
      }, 1000); // rajoute un delais avant de retirer act pour que les animations commencent pas trop tot
      $('.slidershow').removeClass('active');
      $('.slidershow').addClass('active2');
    };
    $(".navn").removeClass('active');
    $(this).addClass('active');
  });
});

/* rajouter class sur survol et retirer sur les autres */
$('.cat').hover(
  function() {
    $(this).addClass('active').siblings().removeClass('active');
  },
);


$('.rating a').click(function(e) {
  e.preventDefault();
  $('#note').val($(this).attr('id'));
  $('.rating a').removeClass('selected');
  $(this).addClass('selected');
});