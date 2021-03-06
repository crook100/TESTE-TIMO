<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>TESTE_Timo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="/index.js" ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="container-fluid">
        <div class="row mt-3 justify-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-fw fa-box"></i> Produtos <button onclick="Start_Product_Create();" class="btn btn-success"><i class="fas fa-fw fa-plus"></i> Criar produto</button>
                    </div>
                    <div id="products_list" class="card-body">
                        <p class="text-center">
                            <i class="fas fa-fw fa-spinner fa-spin"></i> Carregando produtos...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-fw fa-align-justify"></i> Categorias <button onclick="Start_Category_Create();" class="btn btn-success"><i class="fas fa-fw fa-plus"></i> Criar categoria</button>
                    </div>
                    <div id="categories_list" class="card-body">
                        <p class="text-center">
                            <i class="fas fa-fw fa-spinner fa-spin"></i> Carregando categorias...
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Installments modal -->
        <div id="installments_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Parcelas do produto</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="installments_fee_per_installment"><i class="fas fa-fw fa-spin fa-spinner"></i> Carregando parcelamento...</p>
                        <label class="w-100">
                            Selecione a quantidade de parcelas:
                            <input min="1" max="99" oninput="ReloadInstallments();" type="number" step="1" id="installments_quantity" value="1" class="form-control" />
                        </label>
                        <p id="installments_price_per_installment">Pre??o por parcela: </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products CRUD modals -->
        <div id="product_create_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Criar produto</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="product_create_form">
                            <label class="w-100">
                                Nome
                                <input name="name" type="text" maxlength="64" class="form-control">
                            </label>
                            <label class="w-100">
                                Pre??o
                                <input name="price" type="number" step="0.01" class="form-control">
                            </label>
                            <label class="w-100">
                                Descri????o
                                <input name="description" type="text" maxlength="128" class="form-control">
                            </label>
                            <label class="w-100">
                                Categoria
                                <select id="product_create_category_list" name="category_id" class="form-control">
                                    <option value="-1" disabled selected>Carregando...</option>
                                </select>
                            </label>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="product_create_button" onclick="Product_Create();" type="button" class="btn btn-success">Confirmar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="product_edit_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar produto</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="product_edit_form">
                            <label class="w-100">
                                Nome
                                <input id="product_edit_name" name="name" type="text" maxlength="64" class="form-control">
                            </label>
                            <label class="w-100">
                                Pre??o
                                <input id="product_edit_price" name="price" type="number" step="0.01" class="form-control">
                            </label>
                            <label class="w-100">
                                Descri????o
                                <input id="product_edit_description" name="description" type="text" maxlength="128" class="form-control">
                            </label>
                            <label class="w-100">
                                Categoria
                                <select id="product_edit_category_list" name="category_id" class="form-control">
                                    <option value="-1" disabled selected>Carregando...</option>
                                </select>
                            </label>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="product_edit_button" onclick="Product_Edit();" type="button" class="btn btn-success">Confirmar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="product_delete_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir produto</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Tem certeza que deseja excluir este produto?</p>
                    </div>
                    <div class="modal-footer">
                        <button id="product_delete_button" onclick="Product_Delete();" type="button" class="btn btn-danger">Confirmar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categories CRUD modals -->
        <div id="category_create_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Criar categria</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="category_create_form">
                            <label class="w-100">
                                Nome
                                <input name="name" type="text" maxlength="64" class="form-control">
                            </label>
                            <label class="w-100">
                                Taxa de juros
                                <input name="fee" type="number" step="0.01" maxlength="128" class="form-control">
                            </label>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="category_create_button" onclick="Category_Create();" type="button" class="btn btn-success">Confirmar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="category_edit_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar categria</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="category_edit_form">
                            <label class="w-100">
                                Nome
                                <input id="category_edit_name" name="name" type="text" maxlength="64" class="form-control">
                            </label>
                            <label class="w-100">
                                Taxa de juros
                                <input id="category_edit_fee" name="fee" type="number" step="0.01" maxlength="128" class="form-control">
                            </label>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="category_edit_button" onclick="Category_Edit();" type="button" class="btn btn-success">Confirmar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="category_delete_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir categoria</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Tem certeza que deseja excluir esta categoria?</p>
                    </div>
                    <div class="modal-footer">
                        <button id="category_delete_button" onclick="Category_Delete();" type="button" class="btn btn-danger">Confirmar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
