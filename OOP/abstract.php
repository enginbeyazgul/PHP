<?php
abstract class Plugin
{
    abstract public function setTitle($title);
    abstract public function setContent($content);
    public function show()
    {
        echo '
        <h1>'.$this->title.'</h1>
        <p>'.$this->content.'</p>
        ';
    }
}
class SocialMedia extends Plugin
{
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
}
class LastComments extends Plugin
{
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
}

$socialMedia = new SocialMedia;
$lastComments = new LastComments;
$socialMedia->setTitle('Sosyal Medya');
$socialMedia->setContent('Sosyal medya içeriği');
$lastComments->setTitle('Son Yorumlar');
$lastComments->setContent('Yorumların görüneceği yer');
$socialMedia->show();
$lastComments->show();
?>