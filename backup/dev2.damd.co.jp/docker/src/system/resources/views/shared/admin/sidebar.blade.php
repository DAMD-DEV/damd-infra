<ul>
    <li><a href="">注文管理</a></li>
    <li><a href="">DAMD ID</a></li>

    <li{{ request()->is('*/items*') ? " class=active" : '' }}><a href="{{ route('admin.items.index') }}">商品一覧</a></li>
    <li{{ request()->is('*/makers*') ? " class=active" : '' }}><a href="{{ route('admin.makers.index') }}">メーカー</a></li></li>
    <li{{ request()->is('*/cars*') ? " class=active" : '' }}><a href="{{ route('admin.cars.index') }}">車種</a></li>
    <li{{ request()->is('*/specs*') ? " class=active" : '' }}><a href="{{ route('admin.specs.index') }}">仕様/グレード</a></li>
    <li{{ request()->is('*/categories*') ? " class=active" : '' }}><a href="{{ route('admin.categories.index') }}">商品カテゴリ</a></li>
    <li{{ request()->is('*/colors*') ? " class=active" : '' }}><a href="{{ route('admin.colors.index') }}">塗装色</a></li>
    <li{{ request()->is('*/factories*') ? " class=active" : '' }}><a href="{{ route('admin.factories.index') }}">工場</a></li>
    <li{{ request()->is('*/shippings*') ? " class=active" : '' }}><a href="{{ route('admin.shippings.index') }}">送料区分</a></li>
    <li{{ request()->is('*/mail_templates*') ? " class=active" : '' }}><a href="{{ route('admin.mail_templates.index') }}">メールテンプレート</a></li>
</ul>