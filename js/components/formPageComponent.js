export default {
    template: `
    <div>
        <?php if(!empty($message)):?>
        <p><?php echo $message;?></p>
        <?php endif?>
        <h2>Share your story</h2>
        <form action="index.php#" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your name"><br><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Your email"><br><br>
            <label for="reason">Reason for contact:</label>
            <select name="reason">
                <option value="Share your story">Share my story</option>
                <option value="Questions about donation">Questions about donation</option>
                <option value="Questions about us">Questions about Thanks2One</option>
            </select><br><br>
            <label for="story">Subject:</label>
            <textarea type="text" id="subject" name="subject" placeholder="Your text here..."></textarea><br><br><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>`,

}