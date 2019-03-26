export default {
    template: `
    <div id="formContainer" class="large-6 large-offset-3 medium-8 medium-offset-2 small-10 small-offset-1 columns">
        <h3>{{ mainMessage }}</h3>

        <div v-if="mailMsg == 'success'" class="success">
        <p>Your email was sent!</p>
        </div>

        <div v-if="mailMsg != 'success'" class="error">
        <p>{{mailMsg}}</p>
        </div>

        <form action="index.html" method="POST">
            <label for="name">Name:</label>
            <input v-model="input.name" type="text" id="name" name="name" placeholder="Your name">
            <label for="email">Email:</label>
            <input v-model="input.email" type="text" id="email" name="email" placeholder="Your email">
            <label for="reason">Reason for contact:</label>
            <select name="reason" v-model="input.reason">
                <option value="Questions about donation">Question about donation</option>
                <option value="Questions about us">Question about Thanks2One</option>
            </select>
            <label for="story">Subject:</label>
            <textarea v-model="input.message" type="text" id="subject" name="subject" placeholder="Ask your question!"></textarea>
            <button v-on:click.prevent="submit" type="submit" name="submit">Submit</button>
        </form>
    </div>`,

    data () {
        return {
          mainMessage : "Have any questions? Thanks 2 One team is always ready to help you!",
          input:{
              name: '',
              email: '',
              reason: '',
              message: ''
          },
          mailMsg: ''
        }
      },

    methods: {
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
                        this.$router.push({path: '/form'});
                        console.log(data);
                        this.mailMsg = "success";

                        //empty the form
                        this.input.name = '';
                        this.input.email = '';
                        this.input.reason = '';
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