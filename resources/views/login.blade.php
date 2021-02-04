
    <form method="post">
        {{ csrf_field() }}
        <label>Name</label>
        <input type="text" name="username" id="username">
        <label>Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Submit</button>
    </form>
