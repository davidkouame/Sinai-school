<?php 
class Cms5d3861c185931014239577_28e962d228925b29ec1fbfa61d801fd4Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
