</div>
</div>
<style>
#main
{
  padding:10px;
}
#fix_footer
{
  position:fixed;
  bottom:0px;
  padding:5px;
  display:flex;
  width:100%;
  background:white;
  color: #868f8b;
    font-size: 12px;
    box-shadow:0 3px 14px 2px rgb(0 0 0 / 12%);
} 


.input_box
{
  width: 100%;
    color: rgba(0,0,0,.87);
    height: 48px;
    font-size: 14px;
    line-height: 48px;
    padding: 0 12px;
    box-sizing: border-box;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    transition: background .3s cubic-bezier(.25,.8,.5,1);
    border-radius: 2px;
    border: 0;
}






.tabs
{
  flex:0 0 20%;
  text-align:center;
}

.tabs img
{
  margin-bottom:2px;
}

.index_list[data-v-68d7bcd4] {
    width: 100%;
    padding: 20px 0 64px 0;
    box-sizing: border-box;
    background: #fafafa;
}

.index_list .list_content[data-v-68d7bcd4] {
    width: 100%;
    padding: 15px;
    box-sizing: border-box;
    background: #fff;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    transition: .3s cubic-bezier(.25,.8,.5,1);
}
.index_list .list_content .list_ul[data-v-68d7bcd4] {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}


.list_ul .list_li[data-v-68d7bcd4] {
    width: 50%;
    padding: 4px;
    box-sizing: border-box;
}

.list_ul .list_li ol[data-v-68d7bcd4] {
    background-color: #fff;
    border-color: #fff;
    color: rgba(0,0,0,.87);
    transition: .3s cubic-bezier(.25,.8,.5,1);
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    border-radius: 2px;
    overflow: hidden;
}

.list_ul .list_li ol .list_img_box[data-v-68d7bcd4] {
    width: 100%;
    height: 200px;
    padding: 8px;
    box-sizing: border-box;
}
.list_ul .list_li ol .list_img[data-v-68d7bcd4] {
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50%;
}

.list_ul .list_li ol .info[data-v-68d7bcd4] {
    height: 58px;
    overflow: hidden;
    padding: 8px;
    font-size: 14px;
    box-sizing: border-box;
    text-align: center;
    color: rgba(0,0,0,.87);
}

.list_ul .list_li ol .price[data-v-68d7bcd4] {
    display: inline-block;
    color: #f39839;
    padding: 8px;
    font-size: 14px;
    box-sizing: border-box;
}

ol, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}



.web_show {
    height: 56px;
    width: 100%;
    padding: 0 15px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    background: #eee;
    box-shadow: 0 2px 4px -1px rgb(0 0 0 / 20%), 0 4px 5px 0 rgb(0 0 0 / 14%), 0 1px 10px 0 rgb(0 0 0 / 12%);
    will-change: padding-left,padding-right;
    position: relative;
}
.web_show .logo_box {
    width: 36px;
    height: 36px;
}
img {
    vertical-align: middle;
    border-style: none;
}


.digits
{
  padding: 5px 5px;
  margin-left:4px;
    border-radius: 5px;
    background: #f2f2f2;
}



.web_show .download_box {
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
} 

.web_show .download_box img {
    width: 100%;
    height: 100%;
}

.index_title .top_title {
    text-align: center;
    padding: 12px 12px 0;
    color: #009688;
    font-size: 28px;
}

.index_title .bot_title{
    text-align: center;
    padding: 0 12px 16px;
    color: #9a9a9a;
    font-size: 16px;
}
p
{
  padding:0;
}

body{
  font-size:14px;font-family:-apple-system,BlinkMacSystemFont,Helvetica Neue,Helvetica,Segoe UI,Arial,Roboto,PingFang SC,Hiragino Sans GB,Microsoft Yahei,sans-serif!important;

}

th,td
{
  text-align:center;
}
tr
{
  background:white!important;
}
.info td
{
  border:none!important;
  padding:0.5rem;
}
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}

</style>

<div id="fix_footer">
<div class="tabs">
<div>
<a href="<?php echo site_url('welcome/home');?>"><img width="20" src="https://goldsands.online/static/img/<?php echo ($page=='home_active') ? 'home_active' : 'home'; ?>.png" alt=""></a>

</div>
<div <?php echo ($page=='home_active') ? 'style="color:#2e9688;"' : ''; ?>>
Home

</div>
</div>
<div class="tabs">
<div>
<a href="<?php echo site_url('welcome/search');?>"><img width="20" src="https://goldsands.online/static/img/<?php echo ($page=='search_active') ? 'search_active' : 'search'; ?>.png" alt=""></a>
</div>
<div <?php echo ($page=='search_active') ? 'style="color:#2e9688;"' : ''; ?>>
Search

</div>

</div>



<div class="tabs">
<div>
<a href="<?php echo site_url('welcome/win');?>"><img width="20" src="https://goldsands.online/static/img/<?php echo ($page=='win_active') ? 'bet_check' : 'bet'; ?>.png" alt=""></a>
</div>
<div <?php echo ($page=='win_active') ? 'style="color:#2e9688;"' : ''; ?>>
Win

</div>

</div>





<div class="tabs">
<div>
<a href="<?php echo site_url('welcome/game');?>"><img width="20" src="http://54.158.31.180/uri/dist/img/<?php echo ($page=='game_active') ? '121334_active' : '121334'; ?>.png" alt=""></a>
</div>
<div <?php echo ($page=='game_active') ? 'style="color:#2e9688;"' : ''; ?>>
R10

</div>
</div>
<div class="tabs">
<div>
<a href="<?php echo site_url('welcome/my');?>"><img width="20" src="https://goldsands.online/static/img/<?php echo ($page=='my_active') ? 'user_check' : 'user'; ?>.png" alt=""></a>
</div>
<div <?php echo ($page=='my_active') ? 'style="color:#2e9688;"' : ''; ?>>
My

</div>


</div>
</div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>uri/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>uri/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url();?>uri/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>uri/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>uri/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>uri/dist/js/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<!-- Page specific script -->
<script>
  $(function() {

   // alert($(document).height());
    $('body').css('height',$(document).height()+50);

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

   
    $('.slider').bxSlider({
      controls:false,
      pager: false,
      auto:true
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '<?php echo base_url();?>uri/dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
 
    $('#placeBet').click(function()
    {
var bet_string = '';
     $(bets).each(function (i,obj)
     {
      bet_string = bet_string+','+obj;
     });

        $.ajax({url: "http://54.158.31.180/welcome/participate",
        data:{
            numbers:bet_string,
            betAmount:contract_money
        },
        
         success: function(result){
        console.log(result);
        bets=[];
                contract_money=10;
                no_bets=1;
                $('.bet_type').removeClass('active');
                $('.bet_type:first').addClass('active');
                $('.select_number_score').removeClass('active');
              //  $('#0bet').addClass('active');
              
            if(result==1)
            {
                alert("Bet Successfully placed");
                

            
            }
            else{
                alert("Bet already Placed");
            }

            }});
    });
 
 
 
  });
  
var no_bets=1;
  $(document).on('click','.bet_type',function()
{
  $('.bet_type').removeClass('active');
    $(this).addClass('active');
     no_bets= $(this).attr('data-num');
     console.log(no_bets);
});

$(document).on('click','.record',function()
{
  $('.info_'+$(this).attr('data-id')).slideToggle();
  console.log($('.info_'+$(this).attr('data-id')));
});



var contract_money=10;
var bets=[];
$(document).on('click','.select_number_score',function()
{
  
  
  if(!$(this).hasClass('active'))
  {
    if(($('.select_number_score.active').length+1)>parseInt(no_bets))
  {
    alert('You have only selected '+no_bets+' no. of bets');
    return false;
  }

  }
 

    $(this).toggleClass('active');
    bets=[];
    $('.select_number_score.active').each(function(i, obj) {
  

      bets.push($(this).html());

    });



    if($('.select_number_score.active').length==parseInt(no_bets))
    {
      $('#ex1').modal();
    }

 


     console.log(bets);
});


$(document).on('click','.five_money',function()
{
  $('.five_money').removeClass('active');
    $(this).addClass('active');
    // no_bets= $(this).attr('data-num');
  //   console.log(no_bets);
   
     $('#show_price5').text($(this).text());
     contract_money=parseInt($(this).text());

 



});


$(document).on('change','#input_price5',function()
{
    // no_bets= $(this).attr('data-num');
  //   console.log(no_bets);
   
     $('#show_price5').text($(this).val());
     contract_money=parseInt($(this).val());
});





// Set the date we're counting down to


</script>

</body>
</html>
