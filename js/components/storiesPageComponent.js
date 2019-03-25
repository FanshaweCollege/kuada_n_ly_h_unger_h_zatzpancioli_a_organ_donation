export default {
    template: `
    <div id="storiesContainer">
        <div class="row">

            <div id="storiesMain" class="large-10 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1 columns text-center">
                <h3>Organ Donation Stories</h3>
                <h4>Read stories of those whose lives have been affected by organ donation and transplant.</h4>
                <p>We know that the power of organ donation is best told through personal stories. So, we've collected stories of transplant recipients, donor families, and those closest to them to show how transplant and organ donation makes a difference throughout Ontario.</p>
            </div>
        </div>

        <!-- Hey Helen, it is a little raw still, but this would be the bones of the page,
        below there would be a link leading to the page of the specific story you click on.
        Do you think that's possible? If not let me know and we can change it!
        And on the bottom, a form so you can submit your own story. I haven't changed much
        on the form, just copied it from the contact form, minus the vue stuff. Maybe we
        could add a place to send a photo? -->

        <div class="row">
            <div id="stories" class="large-10 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1 columns text-center">
                <div v-for="story in storyList" :data-id="story.story_id" v-on:click="loadStory">
                    <div id="story">
                        <h4>{{story.story_title}}</h4>
                        <img :src="'./images/'+ story.story_img" alt="Story" id="storyImg">
                        <p>{{story.story_author}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="storiesFormContainer">
            <div id="storiesFormTitle" class="large-6 large-offset-3 medium-8 medium-offset-2 small-10 small-offset-1 columns text-center">
                <h3>Share your own experience!</h3>
            </div>
            <div id="storiesForm" class="large-6 large-offset-3 medium-8 medium-offset-2 small-10 small-offset-1 columns">
            <form action="index.html" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your name">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Your email">
                <label for="story">Subject:</label>
                <textarea type="text" id="subject" name="subject" placeholder="Your text here..."></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>`,

    data() {
        return {
            storyList: []
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
        }
    }

}