@extends('dashboard.layouts.template')

@section('content')

    <div id="app1">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>General Settings</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>General Setting <small> For Website</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />

                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">Custom Logo <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <img :src="form.logo" alt="" width="200px" />
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">Website Logo <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" placeholder="Click For Upload Logo"
                                                onclick="this.type ='file'" class="tags form-control" name="logo" v-model="form.logo" />
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">Custom Fav Ico <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <img :src="form.favicon" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">Website Fav Ico <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" placeholder="Click For Upload Fav Ico"
                                                onclick="this.type ='file'" class="tags form-control" name="favicon" v-model="form.favicon"/>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">Description <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <textarea class="form-control" rows="3" placeholder="Website Description"
                                                name="description" v-model="form.description"> Description</textarea>
                                        </div>
                                    </div>
                                    <div class="control-group row">
                                        <label class="control-label col-md-3 col-sm-3">Keywords</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input id="tags_1" type="text" class="tags form-control"  v-model="form.keyword" />
                                            <div id="suggestions-container" style=" position: relative; float: left;width: 250px;margin: 10px;"></div>
                                        </div>
                                    </div>
                                    <div class="control-group row">
                                        <label class="control-label col-md-3 col-sm-3">Auth</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input id="tags_1" type="text" class="tags form-control"
                                                placeholder="Auth Name Surname" name="auth" value="Auth"  v-model="form.auth"/>
                                            <div id="suggestions-container" style="
                            position: relative;
                            float: left;
                            width: 250px;
                            margin: 10px;
                          "></div>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 offset-md-3">
                                            <button type="reset" class="btn btn-sm btn-primary">
                                                Reset
                                            </button>
                                            <button @click="load()" class="btn btn-sm btn-success">

                                                Kaydet
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')

<script  type="application/javascript">
var app1 = new Vue({
  el: '#app1',
  data: {

    form: {
        logo: '',
        favicon: '',
        description: '',
        keyword: '',
        auth : ''
    }
  },
  methods: {
    save : function(){

    },
    load : function(){
        axios.get('general-settings-data')
        .then(response =>{
            this.form = response.data
        })
        .catch(error =>{
            console.log(error);
        })
    }

  },
  mounted() {
     this.load();
  },
});

</script>

@endpush
