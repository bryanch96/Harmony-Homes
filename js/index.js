$("#buscar").submit(function (e) { 
    e.preventDefault();
    sessionStorage.setItem("txtBuscar",$("#txtBuscar").val())
    location.href="search.php"
});