
var product_modify_id = null;
var category_modify_id = null;

//Edit product
function Start_Product_Edit(id)
{
    product_modify_id = id;
    $("#product_edit_modal").modal("show");
}

function Product_Edit()
{
    //Update
    product_modify_id = null;
}

//Delete product
function Start_Product_Delete(id)
{
    product_modify_id = id;
    $("#product_delete_modal").modal("show");
}

function Product_Delete()
{
    //Destroy
    $("#product_delete_button").html("<i class='fas fa-spin fa-spinner'></i> Excluindo...").toggleClass("disabled", true);
    $.ajax({
        url: `/products/${product_modify_id}`,
        async: true,
        method: "DELETE",
    }).done(function() {
        $("#products_list").html("<p class='text-center'><i class='fas fa-fw fa-spin fa-spinner'></i> Produto deletado, atualizando...</p>")
        Load_Products();
    }).fail(function(){
        alert("Houve um erro deletando o produto.");
    }).always(function(){
        $("#product_delete_modal").modal("hide");
        $("#product_delete_button").html("Confirmar").toggleClass("disabled", false);
    });
    product_modify_id = null;
}

//Edit category
function Start_Category_Edit(id)
{
    category_modify_id = id;
    $("#category_edit_modal").modal("show");
}

function Category_Edit()
{
    //Update
    category_modify_id = null;
}

//Delete category
function Start_Category_Delete(id)
{
    category_modify_id = id;
    $("#category_delete_modal").modal("show");
}

function Category_Delete(id)
{
    //Destroy
    $("#category_delete_button").html("<i class='fas fa-spin fa-spinner'></i> Excluindo...").toggleClass("disabled", true);
    $.ajax({
        url: `/categories/${category_modify_id}`,
        async: true,
        method: "DELETE",
    }).done(function() {
        $("#categories_list").html("<p class='text-center'><i class='fas fa-fw fa-spin fa-spinner'></i> Categoria deletada, atualizando...</p>")
        Load_Categories();
    }).fail(function(){
        alert("Houve um erro deletando a categoria.");
    }).always(function(){
        $("#category_delete_modal").modal("hide");
        $("#category_delete_button").html("Confirmar").toggleClass("disabled", false);
    });
    category_modify_id = null;
}

function Load_Products()
{
    //Load products
    $.ajax({
        url: "/products",
        async: true
    }).done(function(data) {
        $("#products_list").html("");

        //Apply newly loaded products to page.
        for(let i = 0; i < data.length; i++)
        {
            $("#products_list").append(`
            <div class="row mb-1">
                <div class="col-md-8">
                    ${data[i].name}<br>
                    <span class="text-secondary">${data[i].description}</span>
                </div>
                <div class="col-md-4">
                    <button onclick="Start_Product_Edit(${data[i].id});" title="Alterar produto" class="btn btn-primary"><i class="fas fa-fw fa-pen"></i></button>
                    <button onclick="Start_Product_Delete(${data[i].id});" title="Excluir produto" class="btn btn-danger"><i class="fas fa-fw fa-trash-alt"></i></button>
                </div>
            </div>`);
        }
    }).fail(function(){
        $("#products_list").html("<i class='fas fa-fw fa-times'></i> Houve um erro carregando os produtos, tente novamente.");
    });
}

function Load_Categories()
{
    //Load categories
    $.ajax({
        url: "/categories",
        async: true
    }).done(function(data) {
        $("#categories_list").html("");

        //Apply newly loaded products to page.
        for(let i = 0; i < data.length; i++)
        {
            $("#categories_list").append(`
            <div class="row mb-1">
                <div class="col-md-8">
                    ${data[i].name}<br>
                    <span class="text-secondary">Taxa de ${data[i].fee}% ao mês</span>
                </div>
                <div class="col-md-4">
                    <button onclick="Start_Category_Edit(${data[i].id});" title="Alterar categoria" class="btn btn-primary"><i class="fas fa-fw fa-pen"></i></button>
                    <button onclick="Start_Category_Delete(${data[i].id});" title="Excluir categoria" class="btn btn-danger"><i class="fas fa-fw fa-trash-alt"></i></button>
                </div>
            </div>`);
        }
    }).fail(function(){
        $("#categories_list").html("<i class='fas fa-fw fa-times'></i> Houve um erro carregando as categorias, tente novamente.");
    });
}

//Window finished loading
$(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    Load_Products();
    Load_Categories();
});
