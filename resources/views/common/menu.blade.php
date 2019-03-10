<div class="ui large top fixed menu">
    <div class="ui container">
        <a class="item active" href="index.html">主页</a>
        <a class="item" href="book/index.html">书架</a>
        <a class="item" href="article/index.html">文摘</a>
        <div class="right menu">
            <div class="item">
                <div class="ui action input">
                    <input type="text" name="keyword" placeholder="输入关键词...">
                    <div class="ui compact selection dropdown" tabindex="0"><select name="type">
                            <option selected="" value="1">图书</option>
                            <option value="2">文摘</option>
                        </select><i class="dropdown icon"></i><div class="text">图书</div><div class="menu" tabindex="-1"><div class="item active selected" data-value="1">图书</div><div class="item" data-value="2">文摘</div></div></div>
                    <button type="submit" class="ui button">搜索</button>
                </div>
            </div>
            <div class="item">
                <a class="ui button" href="auth/login.html">登录</a>
            </div>
            <div class="item">
                <a class="ui primary button" href="auth/register.html">注册</a>
            </div>
        </div>
    </div>
</div>