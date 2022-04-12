
var product_modify_id = null;
var category_modify_id = null;

/* #region  Products */
function Start_Product_Create() {
    $("#product_create_modal").modal("show");

    $.ajax({
        url: "/categories",
        async: true
    }).done(function (data) {
        $("#product_create_category_list").html("");

        //Apply newly loaded products to page.
        for (let i = 0; i < data.length; i++) {
            $("#product_create_category_list").append(`
            <option value="${data[i].id}">
                ${data[i].name}
            </option>`);
        }
    }).fail(function () {
        alert("Houve um erro carregando as categorias.");
        $("#product_create_modal").modal("hide");
    });

}

function Product_Create() {
    $("#product_create_button").html("<i class='fas fa-spin fa-spinner'></i> Criando...").toggleClass("disabled", true);

    let formData = $('#product_create_form').serialize()

    $.ajax({
        url: `/products`,
        data: formData,
        processData: false,
        method: "POST",
    }).done(function () {
        $("#products_list").html("<p class='text-center'><i class='fas fa-fw fa-spin fa-spinner'></i> Produto criado, atualizando...</p>")
        Load_Products();
    }).fail(function () {
        alert("Houve um erro criando o produto.");
    }).always(function () {
        $("#product_create_modal").modal("hide");
        $("#product_create_button").html("Confirmar").toggleClass("disabled", false);
    });
}

function Start_Product_Edit(id) {
    product_modify_id = id;
    $("#product_edit_modal").modal("show");
    $("#product_edit_button").html("<i class='fas fa-fw fa-spin fa-spinner'></i>Carregando...").toggleClass("disabled", true);

    $("#product_edit_name").val("");
    $("#product_edit_price").val("");
    $("#product_edit_description").val("");
    $("#product_edit_category_list").val("");


    //Le as categorias
    $.ajax({
        url: "/categories",
        async: true
    }).done(function (data) {
        $("#product_edit_category_list").html("");

        //Apply newly loaded products to page.
        for (let i = 0; i < data.length; i++) {
            $("#product_edit_category_list").append(`
            <option value="${data[i].id}">
                ${data[i].name}
            </option>`);
        }
    }).fail(function () {
        alert("Houve um erro carregando as categorias.");
        $("#product_edit_modal").modal("hide");
    });

    //Le o produto
    $.ajax({
        url: `/products/${id}`,
        async: true,
    }).done(function (data) {
        $("#product_edit_name").val(data.name);
        $("#product_edit_price").val(data.price);
        $("#product_edit_description").val(data.description);
        $("#product_edit_category_list").val(data.category_id);
    }).fail(function () {
        alert("Houve um erro lendo o produto.");
        $("#product_edit_modal").modal("hide");
    }).always(function () {
        $("#product_edit_button").html("Confirmar").toggleClass("disabled", false);
    });
}

function Product_Edit() {
    //Update
    $("#product_edit_button").html("<i class='fas fa-spin fa-spinner'></i> Alterando...").toggleClass("disabled", true);

    let formData = $('#product_edit_form').serialize()

    $.ajax({
        url: `/products/${product_modify_id}`,
        data: formData,
        processData: false,
        method: "PUT",
    }).done(function () {
        $("#products_list").html("<p class='text-center'><i class='fas fa-fw fa-spin fa-spinner'></i> Produto alterado, atualizando...</p>")
        Load_Products();
    }).fail(function () {
        alert("Houve um erro alterando o produto.");
    }).always(function () {
        $("#product_edit_modal").modal("hide");
        $("#product_edit_button").html("Confirmar").toggleClass("disabled", false);
    });
    product_modify_id = null;
}

function Start_Product_Delete(id) {
    product_modify_id = id;
    $("#product_delete_modal").modal("show");
}

function Product_Delete() {
    //Destroy
    $("#product_delete_button").html("<i class='fas fa-spin fa-spinner'></i> Excluindo...").toggleClass("disabled", true);
    $.ajax({
        url: `/products/${product_modify_id}`,
        async: true,
        method: "DELETE",
    }).done(function () {
        $("#products_list").html("<p class='text-center'><i class='fas fa-fw fa-spin fa-spinner'></i> Produto deletado, atualizando...</p>")
        Load_Products();
    }).fail(function () {
        alert("Houve um erro deletando o produto.");
    }).always(function () {
        $("#product_delete_modal").modal("hide");
        $("#product_delete_button").html("Confirmar").toggleClass("disabled", false);
    });
    product_modify_id = null;
}

function Start_Product_Installments(id)
{
    $("#installments_modal").modal("show");

    $.ajax({
        url: `/installments/${id}`,
    }).done(function (data) {
        $("#installments_price_per_installment").html(`<p>Juros por parcela: ${data.price_per_installment}</p>`)
    }).fail(function () {
        alert("Houve um erro parcelando o produto.");
        $("#installments_modal").modal("hide");
    });
}
/* #endregion */

/* #region  Categories */
function Start_Category_Create() {
    $("#category_create_modal").modal("show");
}

function Category_Create() {
    $("#category_create_button").html("<i class='fas fa-spin fa-spinner'></i> Criando...").toggleClass("disabled", true);

    let formData = $('#category_create_form').serialize()

    $.ajax({
        url: `/categories`,
        data: formData,
        processData: false,
        method: "POST",
    }).done(function () {
        $("#categories_list").html("<p class='text-center'><i class='fas fa-fw fa-spin fa-spinner'></i> Categoria criada, atualizando...</p>")
        Load_Categories();
    }).fail(function () {
        alert("Houve um erro criando a categoria.");
    }).always(function () {
        $("#category_create_modal").modal("hide");
        $("#category_create_button").html("Confirmar").toggleClass("disabled", false);
    });
}

function Start_Category_Edit(id) {
    category_modify_id = id;
    $("#category_edit_modal").modal("show");
    $("#category_edit_button").html("<i class='fas fa-fw fa-spin fa-spinner'></i>Carregando...").toggleClass("disabled", true);

    $("#category_edit_name").val("");
    $("#category_edit_fee").val("");

    $.ajax({
        url: `/categories/${id}`,
        async: true,
    }).done(function (data) {
        $("#category_edit_name").val(data.name);
        $("#category_edit_fee").val(data.fee);
    }).fail(function () {
        alert("Houve um erro lendo a categoria.");
        $("#category_edit_modal").modal("hide");
    }).always(function () {
        $("#category_edit_button").html("Confirmar").toggleClass("disabled", false);
    });
}

function Category_Edit() {
    //Update
    $("#category_edit_button").html("<i class='fas fa-spin fa-spinner'></i> Alterando...").toggleClass("disabled", true);

    let formData = $('#category_edit_form').serialize()

    $.ajax({
        url: `/categories/${category_modify_id}`,
        data: formData,
        processData: false,
        method: "PUT",
    }).done(function () {
        $("#categories_list").html("<p class='text-center'><i class='fas fa-fw fa-spin fa-spinner'></i> Categoria alterada, atualizando...</p>")
        Load_Categories();
    }).fail(function () {
        alert("Houve um erro alterando a categoria.");
    }).always(function () {
        $("#category_edit_modal").modal("hide");
        $("#category_edit_button").html("Confirmar").toggleClass("disabled", false);
    });
    category_modify_id = null;
}

//Delete category
function Start_Category_Delete(id) {
    category_modify_id = id;
    $("#category_delete_modal").modal("show");
}

function Category_Delete(id) {
    //Destroy
    $("#category_delete_button").html("<i class='fas fa-spin fa-spinner'></i> Excluindo...").toggleClass("disabled", true);
    $.ajax({
        url: `/categories/${category_modify_id}`,
        async: true,
        method: "DELETE",
    }).done(function () {
        $("#categories_list").html("<p class='text-center'><i class='fas fa-fw fa-spin fa-spinner'></i> Categoria deletada, atualizando...</p>")
        Load_Categories();
    }).fail(function () {
        alert("Houve um erro deletando a categoria.");
    }).always(function () {
        $("#category_delete_modal").modal("hide");
        $("#category_delete_button").html("Confirmar").toggleClass("disabled", false);
    });
    category_modify_id = null;
}
/* #endregion */

function Load_Products() {
    //Load products
    $.ajax({
        url: "/products",
        async: true
    }).done(function (data) {
        $("#products_list").html("");

        //Apply newly loaded products to page.
        for (let i = 0; i < data.length; i++) {
            $("#products_list").append(`
            <div style="border-bottom: 1px solid gray" class="row mb-1">
                <div class="col-md-8">
                    ${data[i].name}<br>
                    <span class="text-secondary"><i class="fas fa-fw fa-money-bill"></i> ${data[i].price}</span><br>
                    <span class="text-secondary"><i class="fas fa-fw fa-signature"></i> ${data[i].description}</span><br>
                    <span class="text-secondary"><i class="fas fa-fw fa-layer-group"></i> ${data[i].category.name}</span>
                </div>
                <div class="col-md-4">
                    <button onclick="Start_Product_Edit(${data[i].id});" title="Alterar produto" class="btn btn-primary"><i class="fas fa-fw fa-pen"></i></button>
                    <button onclick="Start_Product_Installments(${data[i].id});" title="Ver parcelas" class="btn btn-info"><i class="text-white fas fa-fw fa-layer-group"></i></button>
                    <button onclick="Start_Product_Delete(${data[i].id});" title="Excluir produto" class="btn btn-danger"><i class="fas fa-fw fa-trash-alt"></i></button>
                </div>
            </div>`);
        }
    }).fail(function () {
        $("#products_list").html("<i class='fas fa-fw fa-times'></i> Houve um erro carregando os produtos, tente novamente.");
    });
}

function Load_Categories() {
    //Load categories
    $.ajax({
        url: "/categories",
        async: true
    }).done(function (data) {
        $("#categories_list").html("");

        //Apply newly loaded products to page.
        for (let i = 0; i < data.length; i++) {
            $("#categories_list").append(`
            <div style="border-bottom: 1px solid gray" class="row mb-1">
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
    }).fail(function () {
        $("#categories_list").html("<i class='fas fa-fw fa-times'></i> Houve um erro carregando as categorias, tente novamente.");
    });
}

//Window finished loading
$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    Load_Products();
    Load_Categories();
});
