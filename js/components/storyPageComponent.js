export default {
    props: ['id'],

    template: `
    <div id="formContainer">
        <div class="row">
            <div id="storyImg" class="large-4 medium-4 small-12 columns align-middle">
                <img :src="'images/'+ story.story_img" alt="Story" id="">
            </div>
            <div id="storyText" class="large-7 medium-7 small-12 columns text-center">
                <h2>{{story.story_title}}</h2>
                <h3>{{story.story_author}}</h3>
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