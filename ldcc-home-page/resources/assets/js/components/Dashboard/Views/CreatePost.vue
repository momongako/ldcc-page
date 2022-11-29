<template>
    <div class="row create_post">

        <div class="col-md-12 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-create">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="thumbnail">Categories</label>
                                            <TreeSelect v-model="post.category_id" :options="options" placeholder="Categories" />
                                        </div>
                                        <span class="text-danger error-validate" v-if="hasError('category_id')">{{getError('category_id')}}</span>
                                    </div>
                                </div>
                                <!--Form new and event-->
                                <div v-show="this.showFormNewEvent()" class="row">
                                    <div class="col-md-12">
                                        <label>Title*</label>
                                        <input id="title" type="text" placeholder="Title" class="form-control border-input"
                                               v-model="post.title" @keyup="slugConvert($event.target.value)">
                                        <span class="text-danger error-validate" v-if="keyUnix">This title was created</span>
                                        <span class="text-danger error-validate" v-if="hasError('title')">{{getError('title')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormNewEvent()" class="row">
                                    <div class="col-md-12">
                                        <label>Description*</label>
                                        <textarea id="sub_title" class="form-control border-input" v-model="post.sub_title">

                                        </textarea>
                                        <span class="text-danger error-validate" v-if="hasError('sub_title')">{{getError('sub_title')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormNewEvent()" class="row">
                                    <div class="col-md-12">
                                        <label>Type*</label>
                                        <select id="type" v-model="post.type" class="form-control border-input">
                                            <option value="1">New</option>
                                            <option value="2">Event</option>
                                        </select>
                                        <span class="text-danger error-validate" v-if="hasError('type')">{{getError('type')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormNewEvent()" class="row">
                                    <div class="col-md-12">
                                        <fg-input id="content" type="text"
                                                label="Content*"
                                                placeholder="Content"
                                                v-model="post.content">
                                        </fg-input>
                                        <span class="text-danger error-validate" v-if="hasError('content')">{{getError('content')}}</span>
                                    </div>
                                </div>

                                <!--Form job-->
                                <div v-show="this.showFormJob()" class="row">
                                    <div class="col-md-12">
                                        <label>Name of position*</label>
                                        <input id="position" type="text" placeholder="Name of position" class="form-control border-input"
                                               v-model="post.position" @keyup="slugConvert($event.target.value)">
                                        <span class="text-danger error-validate" v-if="hasError('position')">{{getError('position')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormJob()" class="row">
                                    <div class="col-md-12">
                                        <label>Working location*</label>
                                        <input id="location" type="text" placeholder="Name of position" class="form-control border-input"
                                               v-model="post.location" @keyup="slugConvert($event.target.value)">
                                        <span class="text-danger error-validate" v-if="hasError('location')">{{getError('location')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormJob()" class="row">
                                    <div class="col-md-12">
                                        <label>Levels*</label>
                                        <select id="levers" v-model="post.levers"  class="form-control border-input">
                                            <option value="0">Entry</option>
                                            <option value="1">Experienced (non-manager)</option>
                                            <option value="2">Experienced (Manager)</option>
                                        </select>
                                        <span class="text-danger error-validate" v-if="hasError('levers')">{{getError('levers')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormJob()" class="row">
                                    <div class="col-md-12">
                                        <label>Recruitment office*</label>
                                        <select id="recruitment_office" v-model="post.recruitment_office" class="form-control border-input">
                                            <option value="0">HN</option>
                                            <option value="1">Ho Chi Minh</option>
                                        </select>
                                        <span class="text-danger error-validate" v-if="hasError('recruitment_office')">{{getError('recruitment_office')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormJob()" class="row">
                                    <div class="col-md-12">
                                        <fg-input id="job_description" type="text"
                                                  label="Job description*"
                                                  placeholder="Job description"
                                                  v-model="post.job_description">
                                        </fg-input>
                                        <span class="text-danger error-validate" v-if="hasError('job_description')">{{getError('job_description')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormJob()" class="row">
                                    <div class="col-md-12">
                                        <label>
                                            Start Date*
                                        </label>
                                        <Datepicker :placeholder="labelStartDate" :input-class="dateInput" v-bind:format="customFormatter" v-model="post.start_date"></Datepicker>
                                        <span class="text-danger error-validate" v-if="hasError('start_date')">{{getError('start_date')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showFormJob()" class="row">
                                    <div class="col-md-12">
                                        <label>
                                            End Date*
                                        </label>
                                        <Datepicker :placeholder="labelEndDate" :input-class="dateInput" v-bind:format="customFormatter" v-model="post.end_date"></Datepicker>
                                        <span class="text-danger error-validate" v-if="hasError('end_date')">{{getError('end_date')}}</span>
                                    </div>
                                </div>

                                <!--Case study-->

                                <div v-show="this.showCaseStudy()" class="row">
                                    <div class="col-md-12">
                                        <label>Case Name*</label>
                                        <input id="case_name" type="text" placeholder="Case name" class="form-control border-input"
                                               v-model="post.case_name">
                                        <span class="text-danger error-validate" v-if="hasError('case_name')">{{getError('case_name')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showCaseStudy()" class="row">
                                    <div class="col-md-12">
                                        <label>Case Description*</label>
                                        <input id="case_description" type="text" placeholder="Case description" class="form-control border-input"
                                               v-model="post.case_description" @keyup="slugConvert($event.target.value)">
                                        <span class="text-danger error-validate" v-if="hasError('case_description')">{{getError('case_description')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showCaseStudy()" class="row">
                                    <div class="col-md-12">
                                        <fg-input id="our_client" type="text"
                                                  label="Our Client*"
                                                  placeholder="Our client"
                                                  v-model="post.our_client">
                                        </fg-input>
                                        <span class="text-danger error-validate" v-if="hasError('our_client')">{{getError('our_client')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showCaseStudy()" class="row">
                                    <div class="col-md-12">
                                        <fg-input id="challenges_and_needs" type="text"
                                                  label="Challenges and needs*"
                                                  placeholder="Challenges and needs"
                                                  v-model="post.challenges_and_needs">
                                        </fg-input>
                                        <span class="text-danger error-validate" v-if="hasError('challenges_and_needs')">{{getError('challenges_and_needs')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showCaseStudy()" class="row">
                                    <div class="col-md-12">
                                        <fg-input id="our_work" type="text"
                                                  label="Our work*"
                                                  placeholder="Our work"
                                                  v-model="post.our_work">
                                        </fg-input>
                                        <span class="text-danger error-validate" v-if="hasError('our_work')">{{getError('our_work')}}</span>
                                    </div>
                                </div>

                                <div v-show="this.showCaseStudy()" class="row">
                                    <div class="col-md-12">
                                        <fg-input id="outcome" type="text"
                                                  label="Outcome*"
                                                  placeholder="Outcome"
                                                  v-model="post.outcome">
                                        </fg-input>
                                        <span class="text-danger error-validate" v-if="hasError('outcome')">{{getError('outcome')}}</span>
                                    </div>
                                </div>


                                <div class="row" v-show="this.showFormNewEvent() || this.showCaseStudy()">
                                    <div class="col-md-12">
                                        <div  class="form-group">
                                            <label  for="thumbnail">Thumbnail</label>
                                            <input type="file" name="thumbnail" class="form-control-file" id="thumbnail" @change="onFileChange" style="overflow: hidden;width: 88px;">
                                            <span class="text-danger error-validate" v-if="hasError('thumbnail') && errors['thumbnail'] !== false">{{getError('thumbnail')}}</span>
                                            <span class="text-danger error-validate" v-show="invalidFile === true">{{msgInvalidFile}}</span>
                                        </div>
                                        <div>
                                            <img  v-bind:src="imagePreview" style="width: 100px;height: 100px" v-show="showPreview"/>
                                        </div>
                                    </div>
                                </div>

                                <br/>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-success btn-update-form">Create</button>
                                            <!--<a v-on:click="saveDraf()" class="btn btn-success btn-save-nhap">Create Drafts</a>-->
                                            <router-link to="/posts" class="btn btn-default">Cancel</router-link>
                                        </div>

                                        <div class="form-group">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>
</template>

<script src="https://unpkg.com/vuejs-datepicker@1.6.2/dist/locale/translations/vi.js"></script>

<script>
    import PaperNotification from './../../../components/UIComponents/NotificationPlugin/Notification.vue';
    import AutoCompletePost from './AutoCompletePost.vue';
    import Datepicker from 'vuejs-datepicker';
    import moment from 'moment';
    import TreeSelect from '@riophae/vue-treeselect';
    // import the styles
    import '@riophae/vue-treeselect/dist/vue-treeselect.css'
    export default {
        data: function () {
            return {
                keyUnix:false,
                errors:[],
                messageError:[],
                imagePreview: null,
                showPreview: false,
                labelDate: 'Create at',
                labelStartDate: 'Start date',
                labelEndDate: 'End date',
                dateInput: 'form-control border-input ti-filter',
                post: {
                    title:'',
                    thumbnail: '',
                    sub_title:'',
                    content: '',
                    hot_post: false,
                    home_post: 0,
                    keyword: '',
                    tag: '',
                    author_name: user_curent_info.name,
                    publish_date: new Date(),
                    category_id: null,
                    slug:'',
                    rating: '',
                    relation_posts: [],
                    status: 1,
                    position:'',
                    location:'',
                    levers:null,
                    recruitment_office:null,
                    job_description:'',
                    start_date:null,
                    end_date:null,
                    case_name:null,
                    case_description:null,
                    out_client:null,
                    challenges_and_needs:null,
                    our_work:null,
                    outcome:null,
                    type: 1
                },
                options: [],
                notifications: {
                    topCenter: false
                },
                today : new Date(),
                invalidFile : false,
                msgInvalidFile : ''
            }
        },
        components: {
            AutoCompletePost,
            Datepicker,
            TreeSelect,
            moment
        },
        mounted() {
            this.getCkeditor();
            this.getListPatent();
            this.getTreeCategories();
            this.showFormNewEvent();
            this.showFormJob();
            this.showCaseStudy();
        },
        methods: {
            showCaseStudy(){
                return this.post.category_id === 3;
            },
            showFormJob(){
                return this.post.category_id === 2;
            },
            showFormNewEvent(){
                return this.post.category_id === 1 || this.post.category_id === null;
            },
            getTreeCategories () {
                axios.get('/admin/tree-categories').then((response) => {
                    this.options =  response.data;
                });
            },
            updateRelationPost (items) {
                this.post.relation_posts = items;
            },
            customFormatter(date) {
                return moment(date).format('DD-MM-YYYY');
            },
            dateToYYYYMMDD (date) {
                // may have timezone caveats https://stackoverflow.com/a/29774197/1850609
                return moment(date).format('YYYY-MM-DD');
            },
            onFileChange(event){
                /*
                Set the local file variable to what the user has selected.
                */
                this.post.thumbnail = event.target.files[0];

                /*
                Initialize a File Reader object
                */
                let reader  = new FileReader();

                /*
                Add an event listener to the reader that when the file
                has been loaded, we flag the show preview as true and set the
                image to be what was read from the reader.
                */
                reader.addEventListener("load", function () {
                    this.showPreview = true;
                    this.imagePreview = reader.result;
                }.bind(this), false);

                /*
                Check to see if the file is not empty.
                */

                if( this.post.thumbnail ){
                    /*
                        Ensure the file is an image file.
                    */
                    if ( /\.(jpe?g|png|gif)$/i.test( this.post.thumbnail.name ) ) {

                        console.log("here");
                        /*
                        Fire the readAsDataURL method which will read the file in and
                        upon completion fire a 'load' event which we will listen to and
                        display the image in the preview.
                        */
                        reader.readAsDataURL( this.post.thumbnail );
                         this.invalidFile = false;
                         this.errors['thumbnail'] = false;
                    }else{
                        this.invalidFile = true;
                        this.errors['thumbnail'] = false;
                        this.msgInvalidFile = 'Please enter the correct format jpeg, png, gif';
                    }
                }
            },
            getCkeditor(){
                CKEDITOR.replace('content');

                //job post
                CKEDITOR.replace('job_description');

                //case study
                CKEDITOR.replace('challenges_and_needs',{
                    customConfig: '/ckeditor/basic-config.js'
                });
                CKEDITOR.replace('our_work',{
                    customConfig: '/ckeditor/basic-config.js'
                });
                CKEDITOR.replace('outcome',{
                    customConfig: '/ckeditor/basic-config.js'
                });

            },

            getListPatent: function(page){
                axios.get('/admin/list/categories').then((response) => {
                    this.listParents =  response.data;
                });
            },
            confirmForm: function(e) {
                if(this.checkForm(e)){
                    this.saveForm() ;
                }
            },
            checkForm: function (e) {
                this.errors = [];
                this.messageError = [];
                this.keyUnix = false;
                this.post.content = CKEDITOR.instances['content'].getData();
                this.post.job_description = CKEDITOR.instances['job_description'].getData();

                // case study
                  this.post.challenges_and_needs = CKEDITOR.instances['challenges_and_needs'].getData();
                  this.post.our_work = CKEDITOR.instances['our_work'].getData();
                  this.post.outcome = CKEDITOR.instances['outcome'].getData();

                //validate key
                if (!this.post.category_id) {
                    this.errors['category_id'] = 'Select article category';
                    this.messageError.push('Select article category');
                }

                if (this.showFormNewEvent()){
                  if (!this.post.title) {
                    this.errors['title'] = 'Enter post title';
                    this.messageError.push('Enter post title');
                  }
                  if (!this.post.sub_title) {
                    this.errors['sub_title'] = 'Enter post description';
                    this.messageError.push('Enter post description');
                  }
                  if (!this.post.type) {
                    this.errors['type'] = 'type';
                    this.messageError.push('Enter post description');
                  }
                  if (!this.post.content) {
                    this.errors['content'] = 'Enter post content';
                    this.messageError.push('Enter post content');
                  }
                }

                //job posting
                if (this.showFormJob()) {
                  if (!this.post.position) {
                    this.errors['position'] = 'Enter post position';
                    this.messageError.push('Enter post position');
                  }

                  if (!this.post.location) {
                    this.errors['location'] = 'Enter post location';
                    this.messageError.push('Enter post location');
                  }

                  if (!this.post.job_description) {
                    this.errors['job_description'] = 'Enter post job description';
                    this.messageError.push('Enter post job description');
                  }

                  if (!this.post.start_date) {
                    this.errors['start_date'] = 'Enter post recruitment start date';
                    this.messageError.push('Enter post recruitment start date');
                  }

                  if (!this.post.end_date) {
                    this.errors['end_date'] = 'Enter post recruitment end date';
                    this.messageError.push('Enter post recruitment end date');
                  }
                }

                // case study
                if (this.showCaseStudy()){

                  if (!this.post.our_client) {
                    this.errors['our_client'] = 'Enter post our client';
                    this.messageError.push('Enter post our client');
                  }
                  if (!this.post.challenges_and_needs) {
                    this.errors['challenges_and_needs'] = 'Enter post challenges and needs';
                    this.messageError.push('Enter post challenges and needs');
                  }
                  if (!this.post.our_work) {
                    this.errors['our_work'] = 'Enter post our work';
                    this.messageError.push('Enter post our work');
                  }
                  if (!this.post.outcome) {
                    this.errors['outcome'] = 'Enter post outcome';
                    this.messageError.push('Enter post outcome');
                  }
                  if (!this.post.case_name) {
                    this.errors['case_name'] = 'Enter post case name';
                    this.messageError.push('Enter post case name');
                  }
                  if (!this.post.case_description) {
                    this.errors['case_description'] = 'Enter post case description';
                    this.messageError.push('Enter post case description');
                  }
                }

                if (this.showFormNewEvent() || this.showCaseStudy()){
                  if (!this.post.thumbnail) {
                    this.errors['thumbnail'] = 'Please attach files';
                    this.messageError.push('Please attach files');
                  }
                }


                if (!this.messageError.length) {
                    return true;
                }
            },
            getError: function(key) {
                return this.errors[key];
            },
            hasError: function(key) {
                return this.errors[key] != undefined ;
            },
            checkKeyUnix: function (key) {
                var app = this;
                axios.get('/admin/checkPost/' + key).then((response) => {
                    if (response.data.slug) {
                        this.post.slug = response.data.slug;
                    }
                    //if (response.data.hasKey == 0) {
                    //    app.keyUnix = true;
                    //    app.messageError.push('Tiêu đề đã được đăng ký.');
                    //}
                });
            },
            slugConvert: function(str) {
                str = str.replace(/^\s+|\s+$/g, ''); // trim
                str = str.toLowerCase();

                // remove accents, swap ñ for n, etc
                var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
                var to   = "aaaaaeeeeeiiiiooooouuuunc------";
                for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                }

                str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                    .replace(/\s+/g, '-') // collapse whitespace and replace by -
                    .replace(/-+/g, '-'); // collapse dashes

                this.post.slug = str;
            },
            saveDraf(){
                this.post.status = 3;// status = 3 là save draf, = 2 la xoa
                this.saveForm() ;
            },
            saveForm() {
                event.preventDefault();
                var app = this;
                let formData = new FormData();

                if (this.showFormNewEvent()){
                  formData.append("title", app.post.title);
                  formData.append("sub_title", app.post.sub_title);
                  formData.append("type", app.post.type);
                  formData.append("content", CKEDITOR.instances['content'].getData());
                }

                if (this.showFormJob()){
                  formData.append("position", app.post.position);
                  formData.append("location", app.post.location);
                  formData.append("levers", app.post.levers);
                  formData.append("recruitment_office", app.post.recruitment_office);
                  formData.append("job_description", CKEDITOR.instances['job_description'].getData());
                  if (app.post.start_date) {
                    formData.append("start_date", app.dateToYYYYMMDD(app.post.start_date));
                  }
                  if (app.post.end_date) {
                    formData.append("end_date", app.dateToYYYYMMDD(app.post.end_date));
                  }
                  formData.append('path', app.post.path);
                }

                if (this.showCaseStudy()){
                  formData.append("case_name", app.post.case_name);
                  formData.append("case_description", app.post.case_description);
                  formData.append("our_client", app.post.our_client);
                  formData.append("challenges_and_needs", CKEDITOR.instances['challenges_and_needs'].getData());
                  formData.append("our_work", CKEDITOR.instances['our_work'].getData());
                  formData.append("outcome", CKEDITOR.instances['outcome'].getData());
                }

                if (app.post.author_name) {
                    formData.append("author_name", app.post.author_name);
                }

                if (app.post.publish_date) {
                    formData.append("publish_date", app.dateToYYYYMMDD(app.post.publish_date));
                }

                if (app.post.category_id) {
                    formData.append("category_id", app.post.category_id);
                }

                formData.append("hot_post", (app.post.hot_post==null)?'':app.post.hot_post);
                formData.append("home_post", (app.post.home_post==null)?'':app.post.home_post);
                formData.append('thumbnail', app.post.thumbnail);
                formData.append("keyword", (app.post.keyword==null)?'':app.post.keyword);
                formData.append("tag", app.post.tag);
                formData.append('rating', app.post.rating);
                formData.append('relation_posts', JSON.stringify(app.post.relation_posts));
                formData.append('status', this.post.status);

                let header = {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                };
                if(this.checkForm()){
                  this.$isLoading(true)
                    axios.post('/admin/post', formData,header)
                        .then(function (resp) {
                            if (resp.data.success) {
                              app.$isLoading(false)
                              app.notifyVue('success',resp.data.message);
                                app.$router.push({path: '/posts'});
                            } else {
                                app.notifyVue('danger',resp.data.message);
                            }
                        })
                        .catch(function (resp) {
                            app.notifyVue('danger',"Could not create your setting");
                        });
                }
            },
            notifyVue (type, message) {
                this.$notifications.notify(
                    {
                        message: message,
                        icon: 'ti-bell',
                        horizontalAlign: 'center',
                        verticalAlign: 'top',
                        type: type
                    });
            }
        }
    }
</script>
<style>
    .content{position: relative;}
    .content_right_wrapper{position: sticky;top: 0px;;}
    .row-input {
        margin-bottom: 20px;
    }
    .row-confirm {
        margin-top: 25px;
    }
    .error-validate{
        font-size: 11px;
    }
</style>
