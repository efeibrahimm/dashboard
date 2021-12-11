@extends('dashboard.layouts.template')
@section('content')
    <style>
        .fa-9x {
            font-size: 17px !important;
            margin: 0 5px
        }

        #datatable_filter label {
            display: none
        }

        #dataTables_length {
            width: 100% !important;
            display: flex;
            justify-content: flex-end
        }

        .bg-color,
        .btn-primary {
            background: #1ABB9C !important;
            border: none;
            outline: none
        }

    </style>
    <div id="app1">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Users <small>Some examples to get you started</small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">

                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Blog <small>All</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <button class="btn-sm btn-primary btn" style="float: right" data-toggle="modal"
                                                data-target="#hizmetTeklifleriModal">Blog Ekle</button>
                                            <table id="datatable" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="min-width: 130px; max-width: 140px;">İşlemler</th>
                                                        <th>Title</th>
                                                        <th>Summary</th>
                                                        <th>Tags</th>
                                                        <th>Created_at</th>
                                                        <th>Slug</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="blog in blogs">
                                                        <td>
                                                            <a class="text-danger" style="cursor: pointer"
                                                                @click="deleteBlog(blog.id)"><i
                                                                    class="fa fa-trash fa-9x"></i></a>
                                                            <a class="text-success" @click="editBlog(blog)"><i
                                                                    class="fa fa-edit fa-9x"></i></a>
                                                            <a class="text-success" @clikc="editBlog(blog.id)"><i
                                                                    class="fa fa-eye fa-9x"></i></a>
                                                        </td>
                                                        <td>@{{ blog . title }}</td>
                                                        <td>@{{ blog . summary }}</td>
                                                        <td>@{{ blog . keyword }}</td>
                                                        <td>@{{ blog . created_at }}</td>
                                                        <td>@{{ blog . slug }}</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- blog content start --}}

            <div class="modal fade bs-example-modal-lg" id="hizmetTeklifleriModal" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form class="form-horizontal form-label-left" @submit.prevent="save()"
                            enctype="multipart/form-data">


                            <div class="modal-header bg-primary bg-color">
                                <h4 class="modal-title text-light" id="myModalLabel">Blog</h4>
                                <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="control-group row mb-3">
                                    <label class="control-label col-md-12">Image</label>
                                    <div class="col-md-12 col-sm-9 ">
                                        <input id="" type="file" class="tags form-control"
                                            @change="answerFilesChange2($event)" />
                                    </div>
                                </div>
                                <div class="control-group row mb-3">
                                    <label class="control-label col-md-12">Title</label>
                                    <div class="col-md-12 col-sm-9 ">
                                        <input id="" type="text" class="tags form-control" v-model="blog.title" />
                                    </div>
                                </div>
                                <div class="control-group row mb-3">
                                    <label class="control-label col-md-12">Summary</label>
                                    <div class="col-md-12 col-sm-9 ">
                                        <input id="" type="text" class="tags form-control" v-model="blog.summary" />
                                    </div>
                                </div>
                                <div class="control-group row mb-3">
                                    <label class="control-label col-md-12">Content</label>
                                    <div class="col-md-12 col-sm-9 ">
                                        <textarea id="editor" type="text" class="form-control"
                                            v-model="blog.description"></textarea>
                                    </div>
                                </div>
                                <div class="control-group row mb-3">
                                    <label class="control-label col-md-12">Tags</label>
                                    <div class="col-md-12 col-sm-9 ">
                                        <input id="" type="text" class="form-control" v-model="blog.keyword" />
                                    </div>
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" ref="Close" data-dismiss="modal"
                                    id="close12">Close</button>
                                <button type="reset" class="btn btn-primary">Reset Form</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- blog content start --}}
        </div>
        <!-- /page content -->


    </div>
@endsection

@push('scripts')


    <script type="application/javascript">
        var app1 = new Vue({

            el: '#app1',
            data: {
                blogs: [],
                blog: {
                    title: '',
                    image: '',
                    summary: '',
                    description: '',
                    keyword: '',
                }
            },
            methods: {
                getBlogs: function() {
                    axios.post('blog-data')
                        .then(response => {
                            this.blogs = (response.data).filter((a) => a)
                        })
                        .catch(error => {
                            console.log(error);
                        })
                },
                answerFilesChange: function(e) {
                    this.$set(this.blog, 'loadFiles', e.target.files);
                },
                answerFilesChange2: function(e) {
                    this.$set(this.blog, 'loadImage', e.target.files[0]);
                },
                closeModal: function() {

                },

                save: function() {
                    var postData = new FormData();
                    postData.append('title', this.blog.title);
                    postData.append('keyword', this.blog.keyword);
                    postData.append('summary', this.blog.summary);
                    postData.append('description', this.blog.description);
                    if (this.blog.loadImage) {
                        postData.append('image', this.blog.loadImage, this.blog.loadImage.name);
                    }

                    console.log(this.blog.loadImage.name);
                    axios.post('{{ url('admin/create-blog') }}', postData)
                        .then(function(sr) {
                            successMessage('Blog Başarıyla Eklendi !')
                            this.$refs.Close.click();
                            this.getBlogs();
                        }, function(er) {
                            console.error(er.body);
                            errorMessage('Blog Eklenirken Hata Oluştu.')
                        })
                },
                deleteBlog: function(id) {
                    var kontrol = confirm("Silmek İstediğinize Emin misiniz!");
                    if (!kontrol) {
                        return;
                    }

                    axios.delete('{{ url('admin/delete-blog') }}/' + id)
                        .then(response => {
                            successMessage('Blog Başarıyla Silindi !')
                            this.getBlogs();
                        })
                        .catch(error => {
                            console.log(error);
                            successMessage('Blog Silinirken Hata Oluştu !')
                        })
                },
                editBlog: function(blog) {
                    this.blog = blog;

                }

            },
            created() {
                this.getBlogs();

            }

        })
    </script>
@endpush
