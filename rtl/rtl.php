
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

	<style type="text/css">
	body,ul,li,p{
			font-family: 'DroidArabicKufiRegular'!important;
      		font-weight: normal;
      		font-style: normal;
	}

	p,ul,span,h3,h4,h1,table{
			direction: rtl;
	}

    .inner-header .header-content .header-links li:before {
    content: '/';
    position: static !important;
    left: -4px;
    color:#FFF;
    }

    p.date{
    left:25px;
  }

    /*Tous les images des singles pages*/
	img.main-img{
		float: right !important;
        margin-left: 20px;
	}

    h5.client{
        direction: rtl !important;
    }

    /*Button envoyer email index.php*/
    button.btn-rtl{
        float: right;
    }


/*------------------------------------------*/
    .statistics .stats .stats-icon {
    position: absolute;
    width: 50px;
    height: 50px;
    right: 0!important;
    top: 3px;
    line-height: 50px;
    text-align: center;
    border: 1px solid #FFF;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    font-size: 20px
}

    .statistics .stats {
    padding-right: 75px !important;
    }
/*----------------------------------------*/

    /*app_mobil table*/
    div.app-table{
        direction: rtl !important;
    }


    /*images single pages*/
    div img.single{
    margin-right: 0 !important;
    }

	/*lu for navbar*/
	@media (min-width:768px){
    .navbar-nav{
        float:right !important;
        margin:0
    }
    .navbar-nav>li{
        float:right !important
    }
    .navbar-nav>li>a{
        padding-top:15px;
        padding-bottom:15px
    }

    /*li for navbar*/
    .dropdown-menu{
    position:absolute;
    top:100%;
    left:0;
    z-index:1000;
    display:none;
    float:left;
    min-width:160px;
    padding:5px 0;
    margin:2px 0 0;
    font-size:14px;
    text-align:right !important;
    list-style:none;
    background-color:#fff;
    -webkit-background-clip:padding-box;
    background-clip:padding-box;
    border:1px solid #ccc;
    border:1px solid rgba(0,0,0,.15);
    border-radius:4px;
    -webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);
    box-shadow:0 6px 12px rgba(0,0,0,.175)
}
}

	</style>
</head>
<body>

</body>
</html>
