$(document).ready(
    function a()
    {
        $('#a_search').click(function(){
            $('#search ul').toggleClass('activeSearch');
        })
        $('#a_signin').click(function(){
            $('#signin ul').toggleClass('activeSignin');
        })
        $('#a_menu').click(function(){
            $('#menu ul').toggleClass('activeMenu');
        })
        $()
    }
)
function ComeBack(){
    history.back();
}
function Location()
{
    window.location = "index.php";
}
function PrintOrder(strid)
{   
    var prtContent = document.getElementById(strid);
    var WinPrint = window.open('','','letf=50,top=50,width=800,height=800');
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
}