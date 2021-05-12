function tiger() {

    document.documentElement.scrollTop = 0;
}
var t=1;
p(t);
function s(n)
{ p(t+=n);
}
function c(n)
{
  p(t=n);
  }
  function p(n)
  {

  var r=document.getElementsByClassName("mySlides");
  var dots=document.getElementsByClassName("dot")
  if(n>r.length)
  {t=1;}
  if(n<1)
  {t=r.length;}
  var i;
  for(i=0;i<r.length;i++)
  {
  r[i].style.display="none";}
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  r[t-1].style.display ="block";
    dots[t-1].className += " active";


  }