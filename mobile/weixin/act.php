�}V  d   ŷ��n�C��u
��j�:8G�R���^���t���Oq��_¹�Sb�?��A��x30�BЍrEv�UC`�O���ʓ��aش�B2�ێ�xIc4VI$��v؃q02�=#�çF�z�Ȯ�?k���p��`d`��th��˟��2	�&��ǎ��lO��=,�����q����&8���ޗ���5�>\�t\����X"����ȣ�Akܚ��x�5�����
>��j����Y6 �0��/�$�dD��n�Evz�CIr���m��rl��N|���1�R��qGe�Y5'�	�w�o~��bt��oA��R�OtͫSB8�9�ID�V2��]K3,,�����B+���U�	g��Vx���%����xF�gQ&C���v�d�sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�38�����,.�`4����8&㔌m\��DH#ʪ���R���a�f��,��A\�wI��i�|�ej6Qv-:��&Hng�e����3W�Z��!��69(� �w7g�}=/�������/'^����.j��s�/�샄�G���I3s�\e�9�:³��k�Px�pՐ�� ��&�0
z��:h�d}
��"(���8��D)��rO��w�2�M4�mqB� ��lO����{�ı0PJ�l� 0�e]�>)����{g�d:ȉ���A^Ec#*�0}���.�O\;�Td�n>����^_��p܉�<S �X��G:��(Wڳ͘W���enk��Hb���O���$A��e'^+x�F'���f��&/r��T��!X#c���/]�Z�U�/)���k��dϯ����V�[p��o+�(Y�ƳZUlSnpWR.<����Z����_
��`����:"X��H�lC�I�~Q,��̞�CT��]�q�U;,b+f)�()���	Tv�lD;��(��n����g�V��H�����g�G���lq�P�A�0@�^��HeǪN��~O��	�[7�J��d�F�mrhzW��P�W����9}r>�_�48���}FL�C�F��al�4Ho����N�����F�F���5��=��LG-�w��X$�(��Ŋ<�t��"I�J��e�*�����_$�y�@��F�&w}q˗�0�e4W����ss�#[�ח�w�x�3<��a��t8L	ow���=0a�pG'��X�*-�_a@���4ڍ�����"�[H�y��>��c+P�|����ʏ;��b��64=߲�d�|O�lcF֑\�ՌX���Wi�⺶�
d�>!F�l��ʐ�H������K'�B,`k�#�H�ኽ�R�I�������]��\���얫�2Nu���֟A�(��t���{�eA���0jG��<�ؿl���c@
�ܱ����@�v$rC&q��^6o�d��>�ȏ�n&7Te��Zy," . $GLOBALS['ecs']->table('weixin_user') . ".nickname FROM " . $GLOBALS['ecs']->table('weixin_actlog') . " 
		left join " . $GLOBALS['ecs']->table('weixin_user') . " on " . $GLOBALS['ecs']->table('weixin_actlog') . ".uid=" . $GLOBALS['ecs']->table('weixin_user') . ".ecuid 
		where code!='' and aid=$aid order by lid desc";
$award = $db->getAll ( $sql );
$uid = intval($_SESSION['user_id']);
$api = new weixinapi();
$awardNum = intval($api->getAwardNum($aid));
require("award_{$act['tpl']}.php");
?>