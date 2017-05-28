
/**
 * Created by luizm on 21/07/2016.
 */
var animando_banner;
var tempo_banner = 7000;
var banner_atual = 0;
var temporizador;
var contador_banner = 0;
$(window).ready(function(){
    $(".banner").each(function(){
        $("#container-controle-banner").append("<div data-banner='"+contador_banner+"' class=\"controle-banner\"/>");
        contador_banner++;
    });
    contador_banner-=1;
    $(".controle-banner").click(function(){
        clickBanner($(this).attr("data-banner"));
        return false;
    });
    animaBanner(0);
});
function animaBanner(banner){
    clearTimeout(temporizador);
    animando_banner=true;
    removeClasse("controle-banner-ativo");
    removeClasse("banner-ativo");
    $(".banner[data-banner='"+banner+"']").addClass("banner-ativo");
    $(".controle-banner[data-banner='"+banner+"']").addClass("controle-banner-ativo");
    setNextBanner();
    banner_atual = parseInt(banner);
    animando_banner=false;
}
function removeClasse(classe) {
    $("."+classe).removeClass(classe);
}
function nextBanner(){
    return (banner_atual === parseInt(contador_banner))?0:parseInt(banner_atual)+parseInt(1);
}
function setNextBanner(){
    clearTimeout(temporizador);
    temporizador = setTimeout("animaBanner("+(nextBanner())+")",tempo_banner);
}
function clickBanner(banner_number) {
    if(!animando_banner) {
        animaBanner(banner_number);
    }
}