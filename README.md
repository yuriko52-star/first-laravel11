# first-laravel11
nginxのdefault.confにroot /var/www/src/public;とsrcを入れたのがsrc/src/の中にlaravelprojectが入った原因か？  
不要なら削除したい  
削除したらコンテナも作成しなおしか？  

結論：削除した。コンテナも作成しなおした 
http://localhostでは画面表示ができない。ポート番号を変えたためか、http://localhost:8081やhttp://localhost:8081/helloならいい。めんどうだけど。
ビューでは、連想配列$itemのキーを変数として使用することができる。そのため、連想配列$itemのキーである”content”をビューでは変数$contentとして直接使用できる。  
パラメータの利用  
コントローラ  
1. 連想配列に渡したい値を設定する  
2. viewメソッドの第2引数にその連想配列を指定する  
ビュー  
コントローラで指定された連想配列のキーを変数として使用する  

