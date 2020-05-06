 <div class="Box-body p-5">
        <article class="markdown-body entry-content" itemprop="text"><h1><a id="whisper's cafe" class="anchor" aria-hidden="true" href="#whisper's cafe"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>WHISPER'S CAFE</h1>
<h2><a id="user-content-run" class="anchor" aria-hidden="true" href="#run"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Run</h2>
<ol start="1">
<li>Clone Repository</li>
</ol>
<pre><code>    $ git clone https://github.com/desinthazhr/project-pbw.git
</code></pre>
            <ol start="2">
<li>Integrate Composer</li>
</ol>
<pre><code>       $ composer install
</code></pre>
            <ol start="3">
<li>Make .env file and duplicate .env.example</li>
</ol>
<pre><code>    $ cp .env.example .env
</code></pre>
<ol start="3">
                        <ol start="4">
<li>Generate Key</li>
</ol>
<pre><code>       $ $ php artisan key:generate
</code></pre>
            
<ol start="5">
<li>Aktifkan Xamppp dan buat database dengan nama "whisper_cafe"</li>
</ol>
<ol start="6">
<li>Edit .env sesuai database yang sudah dibuat</li>
</ol>
<ol start="7">
<li>Jika DB sudah dibuat, klik menu 'IMPORT'</li> 
</ol>
<ol start="8">
<li>pilih file 'whisper_cafe.sql'</li>
</ol>
            <ol start="7">
<li>klik oke atau kirim</li>
</ol>
<ol start="9">
<li>Jalankan perintah</li>
</ol>
<pre><code>    $ php artisan serve
</code></pre>


<h5>AKUN ADMIN</h5>
<h7>email : admin@whisper.com</h7><br>
<h7>pass : admin123</h7>
         
