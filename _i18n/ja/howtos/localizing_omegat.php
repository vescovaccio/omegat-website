<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, 自由に使える翻訳メモリツール</title>
  <meta name="generator" content="screem 0.10.2" />
  
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  
  <meta name="keywords" content="翻訳メモリ, TM, コンピューター支援翻訳, コンピューター利用翻訳, CAT, GPL, オープンソース" />

  
<link rel="stylesheet" type="text/css" href="../../config/howto.css" />

</head>



<?php include '../../config/versions.txt'; ?>



<body>

<div id="container">
			
<div id="banner">

<h1>OmegaT</h1>

<p>自由に使える（GPL）翻訳メモリツール</p>

</div>

<div id="content">

<h2>OmegaT 技術情報：OmegaT を他言語に翻訳</h2>


<h3>翻訳：概論</h3>


<p>OmegaT プロジェクトチームは、企業や正式な法人ではありません。単に、プロジェクトに関与しているボランティア団体です。</p>


<p>OmegaT は、自由に使えるオープンソースの翻訳メモリプログラムです。ユーザーインターフェースと文書は、最初は英語で書かれました。このプログラムが、英語圏のみならず世界中の翻訳者向けのものとなり、他の言語で書かれた文書（可能であればプログラム本体も）が望まれるようになりました。けれども、プログラムは販売されるものではなく無料配布されているので、翻訳者に支払うための資金がありません。OmegaT プロジェクト関係者はむしろ、OmegaT を使用してその価値を認めた翻訳者が率先して、翻訳コミュニティー全体のために翻訳することを何よりも期待しています。</p>


<h3>翻訳作業</h3>


<p>執筆時点で、以下の資料が翻訳対象となります。</p>


<p>

* ユーザーインターフェース（メニューなど）<br/>* 取扱説明書（非常に包括的）<br/>* 「お手軽スタート」ガイド（OmegaT の使い方の簡単な説明）<br/>* readme ファイル（OmegaT に関する一般情報を記した文書）<br/>* OmegaT ウェブページ（今、あなたが読んでいるもの）

</p>


<p>翻訳者は、量の多少にかかわらず自由に翻訳に取り組むことができます。特に、取扱説明書本体の翻訳には 2 週間かかるでしょうから、数人の翻訳者が分担して作業してもいいでしょう。</p>

<h3>手順</h3>

<p>1. 対象となる言語関連の情報を得るには、<a href="mailto:jean.christophe.helary@gmail.com">地域化コーディネーター</a>に連絡を取ってください。</p>


<p>2. <a href="http://tech.groups.yahoo.com/group/omegat/">OmegaT ユーザーグループ</a>（「OmT」とも称されます）に参加してください。リストを購読するには、グループの管理者に短いメッセージを送る必要があります。それによって、本当のユーザーと迷惑メールの送信者を識別できます。</p>

<p>グループに参加したら、<a href="http://tech.groups.yahoo.com/group/omegat/database">OmegaT 地域化計画表</a>に目を通してください。この計画表は、OmegaT についてすでに行われた翻訳/地域化作業と、進行中の作業を示しています。関心のある言語についてまだ着手されていない適切な作業があれば、計画表に記入して、その作業について責任を負う意思を伝えてください。この計画表の目的は、複数の翻訳者が気付かずに同じ作業に取り組むこと（重複作業）を避けることです。<strong>複数の翻訳者が同じ言語に同時に取り組むことを避ける上で、翻訳作業を開始したときに地域化計画書に記入することは非常に重要です。</strong></p>

<p>3. 必須ではありませんが、<a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">OmegaT 地域化作業者メーリングリスト</a>（「OmT-l10n」とも称されます）に参加することもお勧めします。</p>

<p>4. <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Full.zip"
>'; $endlink='</a>';?> <?php echo $link ?>完全パッケージ<?php echo $endlink ?>または<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Minimal.zip"
>'; $endlink='</a>';?> <?php echo $link ?>簡易パッケージ<?php echo $endlink ?>として、翻訳用ファイルをダウンロードしてください。</p>

<p>完全パッケージには、取扱説明書、お手軽スタートマニュアル、ユーザーインターフェースリソースバンドル、および readme ファイルが含まれています。簡易パッケージは、完全パッケージから取扱説明書のみを除いたものです。必ずしも完全なパッケージを翻訳する必要はありません。たとえば、ユーザーインターフェース（Bundle.properties）のみ、あるいはお手軽スタートのみを翻訳してもかまいません。</p>

<p>OmegaT ウェブページを翻訳することを望まれる場合は、 <a href="http://www.omegat.org/resources/omt_website.zip">ウェブサイト地域化パッケージ</a>をダウンロードしてください。（注意：いずれも英語のファイルです。OmegaT の地域化が完了している別の言語から翻訳することを望まれる場合は、<a href="mailto:mailto:lin4trans@users.sourceforge.net">OmegaT ウェブサイト管理者</a>にお問い合わせください。）</p>

<p>OmegaT ウェブサイトには、2011 年時点で HTML および PHP 形式のファイルが含まれています。OmegaT で後者の形式を翻訳するには、以下のように、HTML・XHTML フィルターで .php 拡張子を登録する必要があります。</p>

<p>［設定］→［ファイルフィルター］→「HTML・XHTML」を選択し、さらに［編集］→［追加］とたどり、「原文ファイル名の構成例」の列に「*.php」と入力します。</p>

<p>5. 対象言語に関する旧版の文書や翻訳メモリ（TMX ファイル）があるかもしれません。それは、新版の翻訳に利用できるでしょう。過去に OmegaT を地域化したときの翻訳メモリ（TMX）、文書、およびウェブサイトのファイルは、オンラインユーザーグループの<a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">「Files」セクションにあります</a>。翻訳の役に立つ参考資料を誰か持っていないか、<a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">地域化作業者メーリングリスト</a>（OmT-l10n）で聞いてみるのもよいでしょう。</p>

<p>6. 選んだファイルを翻訳します。OmegaT の地域化作業には、もちろん OmegaT の使用を推奨します。けれども、他の好みのプログラムを使っても差し支えありません。</p>

<p>ダウンロードした完全パッケージまたは簡易パッケージの zip アーカイブを展開します。展開後の OmegaT プログラム地域化用ファイルは、OmegaT プロジェクトとして使用できる状態になっています。OmegaT プロジェクトを作成する通常の作業は不要です。</p>

<p>どのように翻訳するかは、完全に翻訳者の自由です。自己裁量によって、情報を変更、修正、削除してかまいません。疑問があったときは、<a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">OmT-l10n リスト</a>で聞くのが最善です。</p>

<p>翻訳文書に GPL（GNU Public License）または GFDL（GNU Free Documentation License）が含まれる場合は、その部分を翻訳<strong>しないでください</strong>。第一の理由は、英語の原文のみが法的に有効だからです。参考用に翻訳を提供してもかまいませんが、それには法的効力がありません。第二に、よほど希少な言語でない限り、両文書とも翻訳済みである可能性が十分にあります。ウェブ検索をすれば、おそらく翻訳版が見つかるでしょう。</p>

<p>訳文ファイルの形式は、原文の形式を保ってください。OmegaT を使えば、ファイル形式は自動的に保持されます。作業していただいた翻訳者にはたいへん感謝しています。ただ、原文と同じ形式（たとえば Word ファイルにはしない）で返送していただけると、プロジェクトチームの作業が非常に楽になります。</p>

<p>7. 訳文をテストします（任意）。</p>

<p>ユーザーインターフェースをテストする方法：</p>

<p>コマンドライン（MS-DOS ウィンドウ）から、以下のコマンドによって OmegaT を起動します（わからないときは OmegaT 取扱説明書を参照してください）。</p>

<p>&nbsp; &nbsp; &nbsp;cd [OmegaT のフルパス]<br/>     java -jar OmegaT.jar resource-bundle=[バンドル名とフルパス]</p>

<p>ここに、 [OmegaT のフルパス] には、OmegaT プログラムが入っているフォルダーのフルパスを記入します。[バンドル名とフルパス] には、翻訳済みのリソースバンドル名（変更していなければ bundle_en.properties）を、その場所のフルパスを含めて記入します。</p>

<p>起動時にお手軽スタートの表示をテストする方法：</p>

<p>OmegaT プログラムの /docs/ フォルダー内に、使用している OS の言語の ISO コードに基づくフォルダーを作成し（既存のフォルダーがあればその名称を暫定的に変更）、お手軽スタートマニュアルをこのフォルダー内にコピーします。ここで、OmegaT を通常どおりに起動します。（使用 OS 言語とは異なる言語に翻訳した場合は、下記の「OmegaT は地域化されたバージョンをどう取り扱うか」を参照してください。）</p>

<p>8. 対象言語で OmegaT のスクリーンショットを作成します。これも任意のステップですが、地域化されたバンドル（上記参照）を使って OmegaT を起動できれば、翻訳の質が高まります。スクリーンショットを作成するには、OmegaT を起動し、スクリーンショットに適した画面を作成します。たとえば、プロジェクトの新規作成ダイアログと典型的なパスを表示させます。</p>

<p>ファイル形式に .png を選択します。</p>

<p>画像を NewImage.png と名付けます。</p>

<p>9. 地域化コーディネーターにファイルを引き渡します。それをコーディネーターは開発チームに引き渡し、次回リリースする OmegaT に含めるようにします。OmegaT または他の CAT ツールを使用して翻訳した場合は、訳文とともに翻訳メモリ（TMX file）を送付してください。それによって、将来翻訳を更新する際に大幅な省力になります。OmegaT プロジェクト全体のファイルを、地域化コーディネーターに送らないようにしてください（地域化コーディネーターがプロジェクト全体のコピーを重複して持つ必要はありません）。むしろ、訳文文書のみをまとめたものと、tmx ファイルをまとめたものを、.zip または tar.gz ファイルとして個別に作成してください。</p>

<p>10. OmegaT 地域化計画表（上述のステップ 2）を忘れずに更新して、どのような文書/バージョンの翻訳を完了したか示してください。同様に、何らかの理由で翻訳作業を放棄した場合は、そのことを計画表に記してください。そうすることによって、対象文書を別の人が翻訳できるようになります翻訳を完了せずに翻訳を中止する場合は、できた分の tmx ファイルを作成し、地域化コーディネーターに送付してください。</p>

<p>11. 望ましくは OmegaT、または他の CAT ツールを使用して訳文を作成した場合、TMX ファイルを <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">リポジトリ</a>にもアップロードしてください。</p>

<h3>OmegaT は地域化されたバージョンをどう取り扱うか</h3>

<p>執筆時点で、OmegaT は使用 OS 言語を検出します。次に、存在する場合、その言語のユーザーインターフェースと取扱説明書を読み込みます。使用 OS 言語のユーザーインターフェースや取扱説明書がない場合、OmegaT はデフォルトで英語版を表示します。</p>

<p>使用 OS 言語とは別言語のバージョンを使いたい場合、そのバージョンが OmegaT に含まれているのであれば、起動コマンドを書き換えることによって、その使用を OmegaT に強制することができます。起動コマンドは、プログラムの入っているフォルダー内の「omegat」および/または 「omegat.bat」というファイル中にあります。通常は次のようなコマンドです。 </p>

<p>&nbsp; &nbsp; &nbsp;java -jar OmegaT.jar</p>

<p> これに、ユーザー言語オプションおよび対応する言語コードを追加して、変更します。たとえばフランス語の場合は次のようになります。</p>

<p>  &nbsp; &nbsp; java -Duser.language=fr -jar OmegaT.jar</p>

<h3>著作権の問題</h3>

<p>ほとんどの OmegaT 文書は、GNU Public License（GPL）または GNU Free Documentation License（GFDL）の下で二次利用が許可されています。ウェブページは、二次利用が許可されていません。著作権問題に特別の関心がなければ、こうしたことを気にかける必要はありません。あなたは著作品の著者として認められ、共有著作権保持者となります。</p>

<p>Copyright Marc Prior 2009-2011</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="SourceForge.net ロゴ" height="31" width="88" /></a><br />

<a href="http://validator.w3.org/check?uri=referer"><img src="../../images/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../../images/css.png" alt="Valid XHTML" /></a>
	</div>

</div>

</body></html>
