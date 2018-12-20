
function exec_sites(){

	var image = "http://www.prodam.am.gov.br/wp-content/uploads/2015/09/BannerNotaFiscalAmazonense.jpg";
	var image1 = "http://www.prodam.am.gov.br/wp-content/uploads/2016/07/13_Banner_PortaldaTransparencia_GOVAM.jpg";
  	var image2 = "http://www.prodam.am.gov.br/wp-content/uploads/2016/08/BANNER-PROPAGANDA.jpg";
	var image3 = "<p style='text-align: center;'><img src='http://www.prodam.am.gov.br/wp-content/uploads/2018/07/msg-eleicao-2018.png' width='520' height='auto'></p>";
	var govurl = window.location.hostname;
	var fapeam = 'www.fapeam.am.gov.br';

	var ehFapeam = govurl.toUpperCase() === fapeam.toUpperCase();



	var objetos = new Array("aside.sidebar",
				"#sidebar1",
				"section.home-sidebar",
				"#column-right",
				"#rightbar",
				".coluna-dir-box",
				".interna-sidebar",
				".widget-area",
				"#box-acompanhe",
				"#direita",
                	        "div.colRight"
						);

	var sidebar = null;

	for(var  i=0;i<objetos.length;i++){
		if(document.querySelector(objetos[i])){
			sidebar = document.querySelector(objetos[i]);
			break;
		}
	}

	if(sidebar){

		if(ehFapeam){

			sidebar.innerHTML = sidebar.innerHTML + "<div style='margin-bottom:20px; text-align:center;'><a href='http://nfamazonense.sefaz.am.gov.br/minha-conta/formulario' target='_blank'><img src='"+image+"' style='width:100%' /></a></div>" 

			+ "<div style='margin-bottom:20px; text-align:center;'><a href='http://www.transparencia.am.gov.br' target='_blank'><img src='"+image1+"' style='width:100%'></a></div>";

		}else{

			sidebar.innerHTML =  "<div style='margin-bottom:20px; text-align:center;'><a href='http://nfamazonense.sefaz.am.gov.br/minha-conta/formulario' target='_blank'><img src='"+image+"' style='width:100%' /></a></div>" 

			+ "<div style='margin-bottom:20px; text-align:center;'><a href='http://www.transparencia.am.gov.br' target='_blank'><img src='"+image1+"' style='width:100%'></a></div>" 
            /*          + "<div style='margin-bottom:20px; text-align:center;'><a href='http://secop.org.br/premio-e-gov' target='_blank'><img src='"+image1+"' style='width:100%' /></a></div>" */
			
			+ sidebar.innerHTML;
			
		}
    }

       var sites = {
		"http://www.amazonprev.am.gov.br/": "#content",
		"http://www.amazonprev.am.gov.br/?area=galerias": "#content",
                "http://www.aades.am.gov.br/": "#column-middle",
		"http://www.aades.am.gov.br/noticias/": "#column-middle",
		"http://www.aades.am.gov.br/videos/": "#column-middle",
		"http://www.aades.am.gov.br/audios/": "#column-middle",
		"http://www.aades.am.gov.br/fotos/": "#column-middle",
		"http://www.ciama.am.gov.br/": "#content",
		"http://www.ciama.am.gov.br/banco_noticia.php": "#content",
		"http://www.ciama.am.gov.br/galerias.php": "#content",
		"http://www.ciama.am.gov.br/galeria.php": "#content",
		"http://www.ciama.am.gov.br/noticia.php": "#content",
		"http://www.seped.am.gov.br/": "#colMeio",
		"http://www.seped.am.gov.br/noticias/": "#colMeio",
		"http://www.seped.am.gov.br/videos/": "#colMeio",
		"http://www.seped.am.gov.br/audios/": "#colMeio",
		"http://www.seped.am.gov.br/fotos/": "#colMeio",
		"http://www.spf.am.gov.br/": "html",
		"http://www.spf.am.gov.br/": "body > table:nth-child(2) > tbody > tr:nth-child(1) > td:nth-child(2)",
		"http://www.spf.am.gov.br/banco_noticias.php": "body > table:nth-child(2) > tbody > tr:nth-child(1) > td:nth-child(2)",
		"http://www.spf.am.gov.br/noticia.php": "body > table:nth-child(2) > tbody > tr:nth-child(1) > td:nth-child(2)"
	};

	/*var sites = {
		"http://www.amazonprev.am.gov.br/": "html"
	};*/

	var expressao = sites[window.location.href];

	var contentMiddle = document.querySelector(expressao);

if(contentMiddle) {
	var elementos = contentMiddle.children;

	for(i=0; i < elementos.length; i++) {
		elementos[i].style.display = "none";
	}

	contentMiddle.innerHTML = image3;
}
    



}
//window.addEventListener("DOMContentLoaded",exec_sites);

