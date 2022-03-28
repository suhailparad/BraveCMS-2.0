<?php
 
namespace App\View\Components;
use Illuminate\View\Component;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Comment;
 
class Sidebar extends Component
{
    public $article_count = 0;
    public $category_count = 0;
    public $comments_count = 0;

    public function render() {
    
        $this->article_count =  Article::count();
        $this->category_count =  ArticleCategory::count();
        $this->comments_count =  Comment::count();

        return view('components.sidebar');
    }
}