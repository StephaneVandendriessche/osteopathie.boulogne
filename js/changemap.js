var cpt = 0;


function changeMapType() 
{
	if (cpt == 1)
	{
		cpt = 0;
		$('.plan_hybrid').removeClass('slct').addClass('noslct');
		$('.plan_roadmap').removeClass('noslct').addClass('slct');
	}
	else
	{
		cpt = 1;
		$('.plan_roadmap').removeClass('slct').addClass('noslct');
		$('.plan_hybrid').removeClass('noslct').addClass('slct');
	}
}