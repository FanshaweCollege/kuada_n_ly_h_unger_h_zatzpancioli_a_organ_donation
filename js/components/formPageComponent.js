export default {
    template: `
    <div id="formContainer" class="large-6 large-offset-3 medium-8 medium-offset-2 small-10 small-offset-1 columns">
        <?php if(!empty($message)):?>
        <p><?php echo $message;?></p>
        <?php endif?>
        <h3>Have any questions or want to share your story? <br>Thanks 2 One team is always ready to help you!</h3>
        <form action="index.php#" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your name">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Your email">
            <label for="reason">Reason for contact:</label>
            <select name="reason">
                <option value="Share your story">Share my story</option>
                <option value="Questions about donation">Questions about donation</option>
                <option value="Questions about us">Questions about Thanks2One</option>
            </select>
            <label for="story">Subject:</label>
            <textarea type="text" id="subject" name="subject" placeholder="Your text here..."></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>`,

}