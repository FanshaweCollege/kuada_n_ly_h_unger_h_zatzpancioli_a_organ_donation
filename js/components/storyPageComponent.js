export default {
    props: ['id'],

    template: `
    <div id="formContainer">
        <div class="row">
            <div id="storyIntro" class="large-8 large-offset-2 medium-8 medium-offset-2 small-10 small-offset-1 columns text-center">
            <img :src="'images/'+ story.story_img" alt="Story" id="">
            <h3>{{story.story_title}}</h3>
            <p>{{story.story_author}}</P>
            </div>
        </div>
        <div class="row">
            <div id="storyText" class="large-8 large-offset-2 medium-8 medium-offset-2 small-10 small-offset-1 columns text-center">
            <p>{{story.story_text}}</p>
            </div>
        </div>
    </div>
    `,

    data() {
        return {
            story: []
        }
    },

    created: function(){
        this.getSingleStory();
    },
    
    methods: {
        getSingleStory(){
            let url = `./admin/scripts/story.php?getstory=${this.$route.params.id}`;

            fetch(url)
                .then(res => res.json())
                .then(data => {this.story = data['0']})
            .catch(function(error) {
                console.error(error);
            });
        }
    }

}