<h3>Clone Laravel Homestead and configure</h3>
<ol>
<li>Open Terminal at your working folder. <code>Note: Your working folder must be mapped with folders in Homestead.yaml</code>
<p>Example: my working folder is <code>/Applications/AMPPS/www/2015/laravel/Homestead/Homestead/</code> in this case</p>
</li>
<li> Type <code>git clone https://github.com/laravel/homestead.git Homestead</code>
<pre>
git clone https://github.com/laravel/homestead.git Homestead
Cloning into 'Homestead'...
remote: Counting objects: 1070, done.
remote: Compressing objects: 100% (12/12), done.
remote: Total 1070 (delta 5), reused 0 (delta 0), pack-reused 1058
Receiving objects: 100% (1070/1070), 158.85 KiB | 145.00 KiB/s, done.
Resolving deltas: 100% (629/629), done.
Checking connectivity... done.
</pre>
</li>
<li>Via Composer Create-Project by typing <code>composer create-project laravel/laravel --prefer-dist</code>
<pre>
Installing laravel/laravel (v5.1.4)
  - Installing laravel/laravel (v5.1.4)
    Loading from cache

Created project in /Applications/AMPPS/www/2015/laravel/Homestead/test-homestead/Homestead/laravel
> php -r "copy('.env.example', '.env');"
Loading composer repositories with package information
Installing dependencies (including require-dev)
...
Writing lock file
Generating autoload files
> php artisan clear-compiled
> php artisan optimize
Generating optimized class loader
> php artisan key:generate
Application key [9f7uzDvPr2POvDs5iejI6YgpXzPJoYEm] set successfully.
</pre>
</li>
<li> Type <code>homestead up</code>
</ol>
<h3>Installing multi sites</h3>
<ol>
<li> Type <code>git clone https://github.com/laravel/homestead.git Homestead</code>
<li> Open <code>Vagrant file</code> and edit <code>confDir = $confDir ||= File.expand_path(“~/.[add your prefix for site 2]homestead")</code>
<li> Type <code>composer create-project laravel/laravel --prefer-dist</code>
<li> Type <code>homestead up</code>
</ol>
After using homestead, you can destroy them by using <code>homestead destroy</code>