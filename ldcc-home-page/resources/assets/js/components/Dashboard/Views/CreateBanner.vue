<template>
    <div class="row">
        <div class="col-md-12 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-create">
                                <div class="row row-input">
                                    <div class="col-md-12">
                                        <fg-input id="title" type="text"
                                                label="Link*"
                                                placeholder="Link"
                                                v-model="banner.link">
                                        </fg-input>
                                        <span class="text-danger error-validate" v-if="hasError('link')">{{getError('link')}}</span>
                                    </div>
                                </div>
                                <div class="row row-input">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="image">Picture</label>
                                            <input type="file" name="image" class="form-control-file" id="image" @change="onFileChange" style="overflow: hidden;width: 75px;">
                                        </div>
                                        <div>
                                            <img v-bind:src="imagePreview" width="100" height="100" v-show="showPreview"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-input">
                                    <div class="col-md-12">
                                        <fg-input id="description" type="text"
                                                  label="Description*"
                                                  placeholder="Description"
                                                  v-model="banner.description">
                                        </fg-input>
                                        <span class="text-danger error-validate" v-if="hasError('description')">{{getError('description')}}</span>
                                    </div>
                                </div>
                                <div class="row row-input">
                                    <div class="col-xs-offset-4 ">
                                        <div class="form-group">
                                            <button class="btn btn-success btn-update-form">Create</button>
                                            <router-link to="/banners" class="btn btn-default">Cancel</router-link>
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

<script>
    import PaperNotification from './../../../components/UIComponents/NotificationPlugin/Notification.vue'
    export default {
        data: function () {
            return {
                errors:[],
                messageError:[],
                imagePreview: null,
                showPreview: false,
                banner: {
                    link:'',
                    image: '',
                    description: ''
                },

                notifications: {
                    topCenter: false
                },
                today : new Date(),
            }
        },
        mounted() {

        },
        methods: {
            onFileChange(event){
                /*
                Set the local file variable to what the user has selected.
                */
                this.banner.image = event.target.files[0];

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
                if( this.banner.image ){
                    /*
                        Ensure the file is an image file.
                    */
                    if ( /\.(jpe?g|png|gif)$/i.test( this.banner.image.name ) ) {

                        console.log("here");
                        /*
                        Fire the readAsDataURL method which will read the file in and
                        upon completion fire a 'load' event which we will listen to and
                        display the image in the preview.
                        */
                        reader.readAsDataURL( this.banner.image );
                    }
                }
            },

            confirmForm: function(e) {
                if(this.checkForm(e)){
                    this.saveForm() ;
                }
            },
            checkForm: function (e) {
                this.errors = [];
                this.messageError = [];
                //validate key
                if (!this.banner.link) {
                    this.errors['link'] = 'Enter the link';
                    this.messageError.push('Enter the link');
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
            saveForm() {
                event.preventDefault();
                var app = this;
                let formData = new FormData();
                formData.append("link", app.banner.link);
                formData.append('image', app.banner.image);
                formData.append('description', app.banner.description);
                let header = {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                };
                if(this.checkForm()){
                    axios.post('/admin/banner', formData,header)
                        .then(function (resp) {
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.$router.push({path: '/banners'});
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
    
</style>
