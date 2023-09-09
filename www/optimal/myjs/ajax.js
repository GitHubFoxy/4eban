//сюда передаем ссылку
function linkcontent(link) {
//Получаем ID контента
var cont = document.getElementById('nav-tabContent');
//Получаем ID вывода текстового предупреждения о загрузке
var loading = document.getElementById('loading');
//получить HTML-содержимое элемента в виде строки "Идет загрузка.."
cont.innerHTML = loading.innerHTML;
//Создаем объект Ajax
var http = createRequestObject();
if( http ) //если объект создан
{
//Созданный объект инициализирует новый запрос
//Параметры: метод GET, ссылка
http.open('get', link);
//задаётся обработчик, который вызывается при смене статуса объекта
http.onreadystatechange = function ()
{
//readyState — число, обозначающее статус объекта
//4 - объект инициализирован, получен ответ от сервера
if(http.readyState == 4)
{
//представление ответа сервера в виде текста
cont.innerHTML = http.responseText;
}
}
http.send(null);
}
else
{
document.location = link;
}
// создание ajax-объекта с поддержкой браузеров
function createRequestObject()
{
//Gecko-совместимые браузеры, Safari, Konqueror
try { return new XMLHttpRequest() }//создание объекта
catch(e) //у - содержит значение исключения
{
//Internet explorer
try { return new ActiveXObject('Msxml2.XMLHTTP') }
catch(e)
{
//Internet explorer
try { return new ActiveXObject('Microsoft.XMLHTTP') }
catch(e) { return null; }
}
}
}
} //end function