<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = array(
            array(
                'autore' => 'Maria Rosa',
                'titolo' => 'Titolo Post 11',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 0',
                'immagine' => 'https://picsum.photos/id/123/200/300',
                'data' => '2023-07-12'
            ),
            array(
                'autore' => 'Lucia Verdi',
                'titolo' => 'Titolo Post 2',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 1',
                'immagine' => 'https://picsum.photos/id/456/200/300',
                'data' => '2023-05-28'
            ),
            array(
                'autore' => 'Giulia Arancioni',
                'titolo' => 'Titolo Post 3',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 2',
                'immagine' => 'https://picsum.photos/id/789/200/300',
                'data' => '2022-11-15'
            ),
            array(
                'autore' => 'Gino Gialli',
                'titolo' => 'Titolo Post 4',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 3',
                'immagine' => 'https://picsum.photos/id/101/200/300',
                'data' => '2024-01-05'
            ),
            array(
                'autore' => 'Lauro Verdini',
                'titolo' => 'Titolo Post 5',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 4',
                'immagine' => 'https://picsum.photos/id/202/200/300',
                'data' => '2022-09-20'
            ),
            array(
                'autore' => 'Mario Rossi',
                'titolo' => 'Titolo Post 1',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 0',
                'immagine' => 'https://picsum.photos/id/123/200/300',
                'data' => '2023-07-12'
            ),
            array(
                'autore' => 'Luca Verdi',
                'titolo' => 'Titolo Post 2',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 1',
                'immagine' => 'https://picsum.photos/id/456/200/300',
                'data' => '2023-05-28'
            ),
            array(
                'autore' => 'Giulia Bianchi',
                'titolo' => 'Titolo Post 3',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 2',
                'immagine' => 'https://picsum.photos/id/789/200/300',
                'data' => '2022-11-15'
            ),
            array(
                'autore' => 'Roberto Gialli',
                'titolo' => 'Titolo Post 4',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 3',
                'immagine' => 'https://picsum.photos/id/101/200/300',
                'data' => '2024-01-05'
            ),
            array(
                'autore' => 'Laura Neri',
                'titolo' => 'Titolo Post 5',
                'contenuto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
Numquam debitis quibusdam laboriosam impedit! Eos omnis ducimus amet tenetur a voluptatibus, tempore optio dolor fugiat voluptate fuga nam voluptatem possimus sunt iste nostrum ipsa pariatur dolore. Deserunt, expedita doloribus!
Aliquam cum ea voluptates voluptate quia, ipsam aperiam delectus sint corporis itaque recusandae blanditiis? Reprehenderit omnis quos eius aliquam fugiat illo, error voluptatum laboriosam, commodi enim doloribus nemo quaerat sapiente.
Ratione adipisci similique quaerat sed impedit repellat consequuntur fugiat aspernatur qui cupiditate vitae illum amet ducimus voluptatum repudiandae quos, et nemo perferendis! Praesentium tempora quidem doloribus voluptates ab alias sed.
Distinctio, veniam! Reprehenderit alias illum neque suscipit nisi earum consequatur cumque adipisci ipsum? A eos odio nulla sint perspiciatis aliquam explicabo mollitia commodi fugit dicta blanditiis, corporis atque ut neque.
Ea voluptates saepe amet molestiae, totam magnam nisi inventore pariatur, repellendus cumque odio maiores nostrum porro hic quos reprehenderit veniam minima voluptas officia molestias veritatis eum quam! Deleniti, dicta in.
Numquam aperiam culpa consequuntur exercitationem quaerat molestiae hic harum similique beatae voluptatum, pariatur tempore ex corporis, fugit fugiat aspernatur a officiis delectus laborum quam ad, sequi cupiditate reprehenderit. Accusantium, dolor.
Tenetur possimus officia incidunt iusto ut odit reiciendis accusamus ea reprehenderit sapiente, provident quod omnis debitis, repellendus quas exercitationem minus nihil ratione eaque, error cum. Nisi possimus culpa cum minima.
Incidunt accusamus recusandae nemo consequatur neque repellendus, veritatis architecto necessitatibus quasi, eaque hic commodi at doloribus non adipisci molestiae repudiandae. Harum a magni vitae placeat aperiam quam illum nostrum dolorum. numero 4',
                'immagine' => 'https://picsum.photos/id/202/200/300',
                'data' => '2022-09-20'
            ),
        );
        // Crearo un ForEach che associa gli attributi degli array con le tabelle da popolare all'interno della migration 

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->title = $post['titolo'];
            $newPost->author = $post['autore'];
            $newPost->type_id = $post['autore'];
            $newPost->post_image = $post['immagine'];
            $newPost->content = $post['contenuto'];
            $newPost->date = $post['data'];
            $newPost->save();
        }


    }
}
