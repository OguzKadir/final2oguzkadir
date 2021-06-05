form method="POST" action="/students">
            @csrf

            <div>
                <input  id="name" name="name">
            </div>

            <div>
                <textarea  id="surname" name="surname"></textarea>
            </div>

             <div >
                <textarea id="department" name="department"></textarea>
            </div>


            <button class="">Create</button>
            <a href="/" class="">Cancel</a>
        </form>
