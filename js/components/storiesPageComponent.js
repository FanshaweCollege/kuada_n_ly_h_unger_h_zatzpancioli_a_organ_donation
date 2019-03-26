export default {
    template: `
    <div id="storiesContainer">
        <div class="row">

            <div id="storiesMain" class="large-8 large-offset-2 medium-8 medium-offset-2 small-10 small-offset-1 columns text-center">
                <h3>Organ Donation Stories</h3>
                <h4>Read stories of those whose lives have been affected by organ donation and transplant.</h4>
                <p>We know that the power of organ donation is best told through personal stories. So, we've collected stories of transplant recipients, donor families, and those closest to them to show how transplant and organ donation makes a difference throughout Ontario.</p>
            </div>
        </div>

        <div class="row">
            <div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 columns text-center align-center">
                <ul id="stories">
                    <li v-for="story in storyList" :data-id="story.story_id" v-on:click="loadStory">
                        <div id="story">
                            <img :src="'./images/'+ story.story_img" alt="Story" id="storyImg">
                            <h4>{{story.story_title}}</h4>
                            <p>{{story.story_author}}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row" id="storiesFormContainer">
            <div id="storiesFormTitle" class="large-6 large-offset-3 medium-8 medium-offset-2 small-10 small-offset-1 columns text-center">
                <h3>Share your own experience!</h3>
            </div>

            <div v-if="mailMsg == 'success'" class="success">
            <p>Your email was sent!</p>
            </div>
    
            <div v-if="mailMsg != 'success'" class="error">
            <p>{{mailMsg}}</p>
            </div>

            <div id="storiesForm" class="large-6 large-offset-3 medium-8 medium-offset-2 small-10 small-offset-1 columns">
            <form action="index.html" method="POST">
                <label for="name">Name:</label>
                <input type="text" v-model="input.name" id="name" name="name" placeholder="Your name">
                <label for="email">Email:</label>
                <input type="text" v-model="input.email" id="email" name="email" placeholder="Your email">
                <label for="story">Story:</label>
                <textarea type="text" v-model="input.message" id="story" name="story" placeholder="Your text here..."></textarea>
                <button v-on:click.prevent="submit" type="submit" name="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>`,

    data() {
        return {
            storyList: [],
            input:{
                name: '',
                email: '',
                reason: 'Sharing A Story',
                message: ''
            },

            mailMsg: ''
        }
    },

    created: function(){
        this.getStories();
    },
    
    methods: {
        getStories(){
            let url = `./admin/scripts/story.php?getstories=true`;

            fetch(url)
                .then(res => res.json())
                .then(data => {this.storyList = data})
            .catch(function(error) {
                console.error(error);
            });
        },

        loadStory(e){
            let id = e.currentTarget.dataset.id;
            this.$router.push({ path: `story/${id}` });
        },

        submit(){
            if(this.input.name != "" && this.input.email != "" && this.input.reason != "" && this.input.message !=""){

                let url =  `./admin/send_mail.php`;

                const formData = new FormData();

                formData.append("name", this.input.name);
                formData.append("email", this.input.email);
                formData.append("reason", this.input.reason);
                formData.append("message", this.input.message);

                fetch(url, {
                    method: 'POST',
                    body: formData
                })
                .then(res=>res.json())
                .then(data =>{
                    if ( data == "failed"){
                        console.warn(data);
                        console.log('email failed');
                        this.mailMsg = "sending failed, please try again later!";
                        return;
                    }else{
                        this.$router.push({path: '/stories'});
                        console.log(data);
                        this.mailMsg = "success";

                        //empty the form
                        this.input.name = '';
                        this.input.email = '';
                        this.input.message = '';
                    }
                })
                .catch(function(error){
                    console.log(error);
                });

            }else{
                this.mailMsg = "Fields cannot be blank!";
            }
        }
    }

}