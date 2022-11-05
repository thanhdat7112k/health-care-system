-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2022 lúc 11:05 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `medica`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `disease_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diseases`
--

INSERT INTO `diseases` (`id`, `disease_name`, `description`) VALUES
(1, 'Suy dinh dưỡng thể còm', 'Là hiện tượng cơ và mỡ cơ thể bị teo đi, được coi là suy dinh dưỡng cấp tính vì thường biểu hiện trong thời gian ngắn. Được xác định khi cân nặng theo chiều cao dưới -2SD'),
(2, 'Chóng mặt tư thế lành tính', 'Bệnh chóng mặt tư thế lành tính (BPPV) gây ra các cơn chóng mặt từ nhẹ đến dữ dội do có những thay đổi ở các vị trí cụ thể trong não, chủ yếu xảy ra khi bạn ngẩng đầu lên hoặc xuống, nằm xuống, khi lật người hoặc ngồi dậy trên giường. Mặc dù chứng chóng mặt tư thế lành tính gây ra nhiều khó chịu, nhưng bệnh hiếm khi nghiêm trọng trừ khi người bệnh có nguy cơ cao bị té ngã. Khi xuất hiện các triệu chứng gây nguy hiểm, bạn nên đến khám bác sĩ để được điều trị bệnh hiệu quả.'),
(3, 'Mụn chứng cá', 'Mụn trứng cá là dạng bệnh nang lông tuyến bã, với các tổn thương da do sự tăng tiết chất bã nhờn, đọng lại ở các lỗ chân lông, kèm theo hiện tượng viêm nhiễm ở nang lông tuyến bã. Bệnh gặp ở mọi lứa tuổi, đặc biệt là mụn trứng cá tuổi dậy thì, hay người có cơ địa da dầu.'),
(4, 'AIDS', 'AIDS là căn bệnh được tiến triển từ HIV. Đây là giai đoạn cuối cùng của HIV. Nhưng không phải tất cả những người nhiễm HIV đều sẽ bị bệnh AIDS. HIV tiêu diệt tế bào CD4. Người trưởng thành khỏe mạnh thường có số lượng CD4 từ 500 - 1.500 tế bào/mm3. Người nhiễm HIV có số lượng CD4 giảm xuống dưới 200 tế bào/mm3 sẽ được chẩn đoán mắc AIDS'),
(5, 'Viêm gan do rượu', 'Viêm gan do rượu là một tình trạng bệnh lý viêm của gan do uống nhiều rượu, dung nạp vào cơ thể lượng lớn rượu có nồng độ cồn cao trong một thời gian dài. Nguyên nhân gây viêm gan do rượu là quá trình phân hủy rượu của cơ thể tạo ra các hóa chất cực độc. Những hóa chất này kích hoạt quá trình viêm phá hủy tế bào gan. Theo thời gian, sẹo thay thế mô gan khỏe mạnh, can thiệp vào chức năng gan. Sẹo không hồi phục này (xơ gan) là giai đoạn cuối của bệnh gan do rượu.'),
(6, 'Viêm mũi dị ứng', 'Dị ứng phấn hoa (tên tiếng Anh là Hay fever) hay còn được gọi là viêm mũi dị ứng (tên tiếng Anh là allergic rhinitis) gây ra các dấu hiệu và triệu chứng giống như cảm lạnh, như sổ mũi, ngứa mắt, nghẹt mũi, hắt hơi và tăng áp lực xoang.'),
(7, 'Viêm khớp', 'Viêm khớp là một thuật ngữ chung của tất cả các rối loạn có ảnh hưởng đến cấu trúc và hoạt động của khớp. Đây là một bệnh lý thường gặp, gây nhiều khó khăn trong sinh hoạt và lao động do đau đớn.'),
(8, 'Hen phế quản', 'Hen phế quản (dân gian còn gọi là hen suyễn), là một bệnh lý đường hô hấp được đặc trưng bởi tình trạng viêm đường dẫn khí mạn tính. Khi tiếp xúc với các yếu tố kích thích, phế quản của người bệnh vốn rất nhạy cảm sẽ phản ứng một cách dữ dội, biểu hiện bởi các triệu chứng như khó thở, khò khè, nặng ngực và ho. Tùy vào mức độ kích thích các tiểu phế quản và tùy vào cơ địa của từng bệnh nhân mà cơn hen phế quản biểu hiện ở mức độ nặng nhẹ khác nhau.\nBệnh hen phế quản thường không thể chữa khỏi, nhưng triệu chứng của bệnh có thể được kiểm soát bởi sự tuân thủ điều trị của bệnh nhân.'),
(9, 'Thoái hoá đốt sống cổ', 'Thoái hóa đốt sống cổ là bệnh lý về xương khớp rất phổ biến. Nguyên nhân gây ra bởi các những dây chằng dọc cổ bị viêm và lắng đọng canxi khiến cho lỗ ra của rễ dây thần kinh hẹp lại, chèn ép vào dây thần kinh và tủy sống. Việc này khiến cho quá trình truyền máu và tín hiệu nên não bị ảnh hưởng gây ra đau đầu, chóng mặt và thêm một vài hiện tượng khác.'),
(10, 'Thuỷ đậu', 'Thủy đậu là một bệnh truyền nhiễm, tác nhân gây bệnh là virus Varicella Zoster. Thủy đậu tuy là một bệnh lành tính nhưng nếu không được điều trị đúng cách sẽ gây nhiều biến chứng nguy hiểm như viêm phổi, viêm màng não, thậm chí là tử vong. Bệnh thủy đậu có thể bùng phát thành dịch, thường gặp vào mùa xuân.'),
(11, 'Ứ mật mãn tính', 'Bệnh gan ứ mật (xơ gan ứ mật) là tình trạng mật bị ứ đọng do viêm, tắc đường mật (cả đường mật trong gan và ngoài gan), từ đó dẫn đến tổn thương gan, gây xơ gan. Bệnh thường gặp ở nam giới nhiều hơn nữ giới. Đặc biệt cần được phát hiện kịp thời và điều trị đúng cách để ngăn chặn sự phát triển của bệnh.'),
(12, 'Cảm lạnh thông thường', 'Cảm lạnh là một trong những căn bệnh về đường hô hấp thường gặp phải ở trẻ em và người lớn. Tuy nhiên, các biểu hiện của cảm lạnh thường dễ bị nhầm lẫn với bệnh cảm cúm. Tác nhân gây ra bệnh cảm lạnh thường là các loại virus thuộc chủng Rhinovirus, hoặc Enterovirus.'),
(14, 'Sốt xuất huyết', 'Bệnh sốt xuất huyết là một bệnh xảy ra phổ biến ở vùng khí hậu nhiệt đới do vi rút Dengue (dengue hemorrhagic fever, DHF hay Sốt dengue) gây ra. Loại vi rút này có 4 chủng huyết thanh bao gồm: DEN-1, DEN-2, DEN-3, DEN-4. Người bệnh có thể nhiễm 1 đến 4 chủng vi rút và có khả năng tạo ra miễn dịch với chủng đó suốt đời.'),
(15, 'Tiểu đường', 'Tiểu đường (đái tháo đường) là một bệnh rối loạn chuyển hóa mạn tính, trong đó cơ thể không sử dụng được glucose do thiếu hụt sản xuất insulin hoặc không sử dụng được insulin hoặc cả hai. Bình thường cơ thể lấy năng lượng từ các thành phần glucose, lipid, protein. Trong đó glucose cung cấp nguồn năng lượng chính cho các tế bào, cho não, cơ…hoạt động. Nhưng muốn sử dụng được glucose thì cần phải có insulin. Insulin là một hormone do tuyến tụy nội tiết sản xuất ra. Insulin giúp cho đường (glucose) từ máu di chuyển vào tế bào, từ đó chuyển hóa và tạo ra năng lượng'),
(16, 'Trĩ', '\"Bệnh trĩ (Hemorrhoids) là các bệnh của hệ thống mạch máu từ tiểu động mạch, tĩnh mạch, thông nối động tĩnh mạch đến cơ trơn và mô liên kết được lót bởi lớp biểu mô bình thường của ống hậu môn. Bệnh trĩ được chia làm 2 loại:\r\n- Nếu búi trĩ ở bên trong trực tràng thì được gọi là bệnh trĩ nội\r\n- Nếu búi trĩ nằm ở lớp dưới da xung quanh hậu môn thì được gọi là bệnh trĩ ngoại\"'),
(17, 'Phản ứng quá mẫn thuốc', 'Dị ứng thuốc là phản ứng bất thường do hệ miễn dịch của bạn đáp ứng quá mức với thuốc hoặc các thành phần tá dược trong thuốc. Tất cả các thuốc đều có nguy cơ gây ra phản ứng dị ứng bao gồm thuốc tây, thuốc nam, thuốc bắc và vắc-xin. Tuy nhiên, có một vài loại thuốc thường hay gây ra phản ứng dị ứng hơn đó là kháng sinh, các thuốc giảm viêm chống đau, thuốc nhóm gây tê-gây mê và nhóm thuốc cản quang dùng trong chụp chiếu chẩn đoán hình ảnh (chụp cắt lớp vi tính, chụp cộng hưởng từ).'),
(18, 'Viêm niêm mạc hang vị dạ dày', 'Bệnh viêm niêm mạc hang vị dạ dày là tình trạng hang vị ở phần niêm mạc dạ dày bị viêm, cũng tương tự như viêm ở những vị trí khác trong dạ dày (tùy vào vị trí viêm hoặc loét sẽ có những tên gọi khác nhau)'),
(19, 'Trào ngược dạ dày thực quản', 'Bệnh trào ngược dạ dày – thực quản (GERD) là hiện tượng xảy ra khi dịch tiêu hoá của dạ dày thường xuyên bị chảy ngược vào thực quản (là một ống dẫn đưa thức ăn từ miệng vào dạ dày). Vì dịch này có tính axit nên có thể gây kích ứng và làm viêm niêm mạc thực quản của bạn.'),
(20, 'Đau tim', 'Đau tim là một tình trạng y tế khẩn cấp, người bệnh cần can thiệp nhanh chóng để tăng cơ hội sống và giảm sự tổn thương tim. Các triệu chứng của cơn đau tim có nhiều sự thay đổi giữa các bệnh nhân, các mức độ nặng nhẹ rất khác nhau.'),
(21, 'Viêm gan A', 'Bệnh viêm gan A là bệnh do virus làm tổn thương tế bào biểu mô gan và suy giảm chức năng gan. Đây là một bệnh lây nhiễm từ người sang người theo đường phân miệng do nguồn nước bị nhiễm bẩn, thực phẩm nhiễm virus nhưng chưa được nấy kỹ.'),
(22, 'Viêm gan B', 'Viêm gan B là một bệnh nhiễm trùng do vi rút tấn công gan và có thể gây viêm gan cấp tính và mãn tính, ước tính có đến gần 1/3 dân số thế giới mắc bệnh, tỉ lệ mắc nhiều nhất tại các nước đang phát triển.'),
(23, 'Viêm gan C', 'Viêm gan C là tình trạng nhiễm trùng gan do siêu vi viêm gan C (HCV) gây ra. Bệnh khiến các tế bào gan bị viêm, gây rối loạn chức năng gan. Theo thời gian, tình trạng viêm trong mô gan có thể hình thành các tổn thương xơ chai vĩnh viễn, dẫn đến nhiều biến chứng nguy hiểm như xơ gan và ung thư gan.'),
(24, 'Viêm gan D', 'Viêm gan D là bệnh gan ở cả hai dạng cấp tính và mãn tính do virus HDV gây ra. HDV thường xảy ra theo kiểu đồng nhiễm, có nghĩa là bạn thường sẽ nhiễm viêm gan siêu vi B cùng lúc với viêm gan siêu vi D. Virus này thường lây truyền từ mẹ sang con trong khi sinh, cũng như lây qua đường máu hoặc các chất dịch cơ thể khác.'),
(25, 'Viêm gan E', 'Viêm gan E là bệnh do virus HEV gây ra, virus là một chuỗi đơn ARN, dương, không có vỏ bọc, có sức chịu đựng kém. Bệnh thường xảy ra và có thể bùng phát thành dịch vào mùa mưa lũ, khi nguồn nước bị ô nhiễm nặng.'),
(26, 'Tăng huyết áp', 'Tăng huyết áp là bệnh diễn biến thầm lặng qua nhiều năm tháng, đa phần phát hiện tình cờ hoặc chỉ khi bệnh nhân có biến chứng mới được phát hiện. Tăng huyết áp gây ra nhiều hậu quả xấu nếu không được phát hiện và điều trị kịp thời như: nhồi máu cơ tim, nhồi máu não, suy thận…'),
(27, 'Thay đổi tâm trạng', 'Rối loạn lưỡng cực được đặc trưng bởi tính khí thất thường hoặc thay đổi tâm trạng. Tình trạng thay đổi tâm trạng này có thể dao động từ cực cao (hưng cảm) đến cực thấp (trầm cảm). Các giai đoạn hưng cảm và trầm cảm thường kéo dài trong vài tuần hoặc vài tháng.'),
(28, 'Hạ đường huyết', 'Bệnh hạ đường huyết do tiểu đường xảy ra khi lượng hormone insulin và glucagon điều tiết trong máu bị mất cân bằng. Các nguyên nhân gây ra sự mất cân bằng hormone có thể là: sử dụng quá nhiều insulin hoặc thuốc tiểu đường khác, không ăn đủ hoặc đợi quá lâu giữa các bữa ăn (như qua một đêm), tập thể dục mà chưa ăn đầy đủ, không ăn đủ lượng đường bột cần thiết, chế độ ăn kiêng không hợp lý, uống nhiều rượu bia gây mất cân bằng nội tiết.'),
(29, 'Suy tuyến giáp', 'Suy tuyến cận giáp là bệnh phổ biến liên quan đến tuyến cận giáp khi có sự sản xuất kém của hormon tuyến cận giáp. Bệnh nhân bị suy tuyến cận giáp thường biểu hiện hạ calci máu và tăng phospho máu. Nếu không được chữa trị kịp thời sẽ ảnh hưởng đến hệ thống thần kinh trung ương, chức năng các hệ cơ quan khác.'),
(30, 'Bênh chốc lở/ bệnh lở da', 'Bệnh chốc lở là một loại bệnh nhiễm trùng da do cầu khuẩn gây ra, thường gặp ở trẻ nhỏ. Khi bị chốc lở, vùng da bị nhiễm trùng sẽ xuất hiện bóng nước, rộp đỏ và khi vỡ ra sẽ tạo thành các vết loét.'),
(31, 'Bệnh vàng da', 'Vàng da là tình trạng da và kết mạc mắt có màu vàng, do nồng độ bilirubin trong máu tăng cao bởi các nguyên nhân bệnh lý gây ra. Màu vàng thường xuất hiện ở kết mạc mắt đầu tiên và mức độ vàng da phụ thuộc vào nồng độ bilirubin trong máu.'),
(32, 'Bệnh sốt rét', 'Bệnh sốt rét là một trong những bệnh truyền nhiễm phổ biến nhất và là vấn đề rất nghiêm trọng đối với sức khỏe cộng đồng. Bệnh gây ra bởi ký sinh trùng Plasmodium, lây truyền từ người này sang người khác khi những người này bị muỗi đốt.'),
(33, 'Đau nửa đầu', 'Đau nửa đầu hay còn gọi là đau đầu Migraine là tình trạng đau đầu một bên một cách đột ngột và dữ đội, đi kèm với các triệu chứng như buồn nôn, nôn mửa, nhạy cảm với ánh sáng và tiếng ồn. Đau nửa đầu bên trái và đau nửa đầu bên phải thường gặp với tần suất như nhau. Cơn đau thường kéo dài từ khoảng vài giờ, một số trường hợp có thể kéo dài tới vài ngày.'),
(34, 'Viêm xương khớp', 'Viêm xương khớp là bệnh khớp xuất hiện khi các mô trong khớp bị phá vỡ theo thời gian. Đây là dạng viêm khớp thường gặp nhất và phổ biến hơn ở người lớn tuổi.\r\nNhững người bị viêm xương khớp thường bị đau khớp và sau khi nghỉ ngơi lại bị cứng khớp (không thể chuyển động dễ dàng) trong một khoảng thời gian ngắn.'),
(35, 'Xuất huyết não', 'Xuất huyết não là một loại đột quỵ, xảy ra khi máu tràn vào mô não và gây tổn thương não. Khi máu từ tổn thương kích thích các mô não thì sẽ gây ra phù não, máu tập trung thành một khối gọi là tụ máu. Tình trạng này làm tăng áp lực lên các mô xung quanh, cuối cùng giết chết các tế bào não và vỡ mạch não.'),
(36, 'Viêm loét dạ dày', 'Viêm loét dạ dày là căn bệnh gây tổn thương viêm và loét trên niêm mạc dạ dày hoặc tá tràng (phần đầu của ruột non). Những tổn thương này xảy ra khi lớp niêm mạc (màng lót bên trong cùng) của dạ dày hay tá trạng bị bào mòn và các lớp bên dưới thành dạ dày hay thành ruột sẽ bị lộ ra. Vết loét ở tá tràng chiếm 95%, vết loét ở dạ dày chiếm 60% trong đó vết loét ở bở cong nhỏ dạ dày chiếm 25% các trường hợp.'),
(37, 'Viêm phổi', 'Viêm phổi là hiện tượng viêm nhiễm của nhu mô phổ bao gồm viêm phế nang, túi phế nang, ống phế nang, tổ chức liên kết khe kẽ và viêm tiểu phế quản tận cùng. Các phế nang, đường dẫn khí trong phổi có thể chứa đầy chất lỏng hoặc mủ, gây ho có đờm hoặc mủ, sốt, ớn lạnh và khó thở. Thông thường, có nhiều tác nhân gây ra tình trạng viêm phổi, nhưng thường do vi khuẩn, virus và nấm. Viêm phổi có thể được phân loại theo nhiều cách khác nhau tuỳ theo nguyên nhân và mục đích phân loại.'),
(38, 'Vẩy nến', 'Vẩy nến là một bệnh viêm da mã tính rất phổ biến. Theo thống kê, có khoảng 2-3% dân số thể giới mắc phải bệnh này. Ở trạng thái bình thường, các tế nào da cũ sau khi chết đi sẽ bong ra và được thay thế bởi các tế bào da mới. Nhưng đối với bệnh nhân mắc vảy nến, quá trình trên diễn ra nhanh gấp 10 lần do hiện tượng tăng sinh tế bào, khiến các thế bào da cũ và mới không kịp thay đổi, tích tụ lại một chỗ tạo thành những mảng dày, có vảy trắng hoặc bạc.'),
(39, 'Bệnh lao', 'Lao phổi là một bệnh truyền nhiễm do vi khuẩn lao gây nên ở phổi của người bệnh. Vi khuẩn Mycobacterium tuberculosis chính là nguyên nhân chính gây ra bệnh lao phổi. Vi khuẩn Mycobacterium tuberculosis thông qua các con đường như: người lao phổi ho, nói, hắt hơi, khạc nhổ mà phát tán ra bên ngoài, lây truyền cho người hít. Các vi khuẩn lao này có thể qua đường máu hay bạch huyết để lan truyền đến các bộ phận nội tạng khác trong cơ thể người bệnh và gây bệnh lao tại đó.'),
(40, 'Bệnh thương hàn', 'Bệnh thương hàn là một bệnh lý nhiễm trùng với tác nhân gân bệnh là vi khuẩn Salmonella typhi. Bệnh có nhiều triệu chứng khác nhau trên từng bệnh nhân và nhiều biến chứng nguy hiểm khác. Sốt thương hàn là bệnh lý có khả năng lây lan cao.'),
(41, 'Nhiễm trùng đường tiết niệu', 'Nhiễm trùng đường tiết niệu (Urianry tract infection - UTI) là nhiễm trùng bất kỳ cơ quan nào trong hệ tiết niệu, bao gồm hai quả thận, niệu quản, bàng quang và niệu đạo. Hầu hết các trường hợp liên quan đến phần dưới hệ tiết niệu - bàng quang và niệu đạo'),
(42, 'Suy tĩnh mạch', 'Suy giãn tĩnh mạch là tình trạng các tĩnh mạch sưng phồng, có thể nhìn thấy qua da. Chúng thường có màu xanh, phồng to và ngoằn ngoèo.Giãn tĩnh mạch thường gặp nhất ở người lớn tuổi, đặc biệt là phụ nữ, và đặc biệt xảy ra ở chân.'),
(43, 'Rối loạn vận động chậm phát', 'Các rối loạn vận động chậm phát (TDs) là những chuyển động không kiểm soát được của lưỡi môi, mặt, thân và các chi. Bệnh thường xảy ra ở những người đang dùng các thuốc kháng acid dopaminergic dài hạn. Bệnh nhân tâm thần phân liệt, rối loạn tâm thần phân liệt, rối loạn lưỡng cực đã được điều trị bằng thuốc chống loạn thần trong thời gian dài thường mắt phải các chứng rối loạn vận động chậm, nhưng bệnh này có thể xuất hiện ở những bệnh nhân khác. Tình trạng sức khoẻ này rất phổ biến, bệnh có thể ảnh thướng đến bệnh nhân ở mọi lứa tuổi'),
(44, 'Co giật nửa mặt', 'Co giật nửa mặt là một tình trạng co giật không tự ý, ngắt quãng của các nhóm cơ chi phối dây thần kinh VII ở một bên mặt và không gây đau. Bệnh tuy không gây đau và đe doạ tình mạng, nhưng gây ảnh hưởng rất lớn đến tâm lý và tinh thần của người bênh, từ đó làm cản trở trong giao tiếp xã hội và ảnh hưởng đến sinh hoạt và công việc. Thường xuất hiện ở các bệnh nhân từ 40 tuổi đến 60 tuổi.'),
(45, 'Hội chứng Meige', 'Hội chứng Meige là một dạng hiếm gặp của chứng loạn trương lực cơ, một chứng rối loạn hệ thần kinh, trong đó một người thường xuyên bị co thắt cưỡng bức của mắt, hàm, lưỡi và các cơ mặt dưới. Các cơn co thắt có thể giống như cảm giác bị đâm, tương tự như bị điện giật. Vì các cử động nằm ngoài khả năng kiểm soát của người bị bệnh, chúng có thể gây ra sự khó khăn trong các tình huống xã hội. Độ tuổi dễ mắc bệnh là từ 40 tuổi đến 60 tuổi'),
(46, 'Co thắt mí mắt', 'Blepharospasm là một rối loạn thần kinh gây ra các cử động cơ không kiểm soát được khiến mí mắt đóng lại hoặc khó mở (loạn trương lực cơ). Điều này có thể ảnh hưởng đến khả năng nhìn của bệnh nhân. Độ tuổi trung bình của các bệnh nhân là từ 40 đến 60 tuổi'),
(47, 'Hội chứng Tourette', 'Hội chứng Tourette (too-RET) là một chứng rối loạn liên quan đến các chuyển động lặp đi lặp lại hoặc âm thanh không mong muốn (tics) không thể dễ dàng kiểm soát được. Ví dụ, bạn có thể liên tục chớp mắt, nhún vai hoặc thốt ra những âm thanh bất thường hoặc những từ xúc phạm. Tics thường xuất hiện trong độ tuổi từ 2 đến 15, với độ tuổi trung bình là khoảng 6 tuổi. Nam giới có nguy cơ mắc hội chứng Tourette cao hơn nữ giới khoảng 3-4 lần'),
(48, 'Rối loạn TIC', 'Rối loạn TIC hay còn gọi là hội chứng TIC, là tình trạng co thắt không kiểm soát ở mặt như mắt nhấp nháy hoặc nhăn mũi. Chúng cũng có thể được gọi là co thắt bắt chước. Mặc dù rối loạn TIC thường tự phát, chúng có thể bị ức chế tạm thời. Rối loạn TIC có thể gặp phải ở mọi độ tuổi'),
(49, 'Liệt dây thần kinh mặt Bells Palsy', 'Bells palsy là một tình trạng gây ra tình trạng yếu tạm thời hoặc tê liệt các cơ ở mặt. Nó có thể xảy ra khi dây thần kinh điều khiển cơ mặt của bạn bị viêm, sưng hoặc bị nén. Mọi độ tuổi đều có thể mắc bệnh nên cần chú ý'),
(50, 'Đau dây thần kinh sinh ba', 'Đau dây thần kinh sinh ba là một chứng bệnh hiếm gặp. Các sợi dây thần kinh cảm giác và của dây thần kinh bị tổn thương nên khi một kích thích xuất hiện sẽ hình thành nên một xung động đau. Những kích thích kéo dài, lặp lại nhiều lần tạo nên một vùng hưng phấn ở vỏ não làm người bệnh có cảm giác đau thường xuyên, liên tục và dữ dội. Đau dây thần kinh sinh ba là một chứng bệnh mãn tính, kéo dài nhiều ngày đến nhiều tháng. Các bệnh nhân thường là nhóm người cao tuổi từ 60 tuổi trở lên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback_rateds`
--

CREATE TABLE `feedback_rateds` (
  `id` int(11) NOT NULL,
  `rate` float DEFAULT NULL,
  `feedback` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback_rateds`
--

INSERT INTO `feedback_rateds` (`id`, `rate`, `feedback`, `username`) VALUES
(1, 4, 'Ý tưởng của hệ thống khá hay, có thể áp dụng vào thực tế. Tuy nhiên hệ thống còn đơn giản, ít chức năng', 'user1'),
(2, 4, 'Nhìn chung hệ thống cũng được, cần phát triển thêm một số chức năng như gợi ý từ khoá khi nhập vào thanh tìm kiếm ', 'user1'),
(3, 4, 'Giao diện hệ thống đơn giản. Cần gợi ý cho người dùng bằng một số câu hỏi thay vì chỉ nhập từ khoá đơn giản như bây giờ. Nhìn chung ý tưởng của hệ thống là tốt', 'user2'),
(4, 5, 'Tuyệt vời, nên phát triển hoàn thiện để áp dụng thực tế', 'user2'),
(5, 4, 'Cũng được nhưng hệ thống vẫn còn quá đơn giản. Hy vọng phát triển thêm các tính năng khác để sử dụng được', 'user1'),
(6, 4, 'Cần nhận thêm một số thông tin như tuổi, giới tính nữa. Nếu phát triển thêm thì tính ứng dụng cũng cao đấy', 'user'),
(7, 5, 'he thong dung qua la tot luon', 'user'),
(8, 1, 'Không có tính ứng dụng gì cả. Tìm triệu chứng trên google có khi còn nhanh hơn', 'user1'),
(9, 5, 'Đánh giá cao ý tưởng của hệ thống ', 'user1'),
(10, 1, 'Quá đơn giản, ý tưởng thì có nhưng mà thực hiện chưa tới, tương tác người dùng hoàn toàn bị động. cần phát triển theo hướng giống chatbot tư vấn thì tốt hơn', 'user'),
(11, 3, 'Tạm được, không có gì đặc sắc lắm', 'admin'),
(12, 4, '', 'user'),
(13, 2, 'Hệ thống hơi khó dùng, còn nhiều chỗ đánh giá chưa chính xác', 'admin'),
(14, 4, '', 'user'),
(15, 3, 'Ít chức năng, lời khuyên hơi chung chung chưa giải quyết triệt để vấn đề đang gặp phải', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hibernate_sequence`
--

CREATE TABLE `hibernate_sequence` (
  `next_val` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hibernate_sequence`
--

INSERT INTO `hibernate_sequence` (`next_val`) VALUES
(1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `medical_histories`
--

CREATE TABLE `medical_histories` (
  `id` int(11) NOT NULL,
  `date_time` date DEFAULT NULL,
  `symptoms` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `medical_histories`
--

INSERT INTO `medical_histories` (`id`, `date_time`, `symptoms`, `disease_name`, `username`) VALUES
(8, '2022-10-17', 'gầy; sút cân nhiều', 'Suy dinh dưỡng thể phối hợp', 'admin'),
(14, '2022-10-19', 'gầy', 'Suy dinh dưỡng thể phối hợp', 'admin'),
(15, '2022-10-19', 'gầy; da bọc xương', 'Suy dinh dưỡng thể còm', 'admin'),
(16, '2022-10-20', 'gầy; tóc mỏng; phù chân tay mặt', 'Suy dinh dưỡng thể phối hợp', 'admin'),
(17, '2022-10-21', 'gầy; da bọc xương; khó chịu', 'Suy dinh dưỡng thể còm', 'admin'),
(18, '2022-10-21', 'da bọc xương; bụng óng; khó chịu', 'Suy dinh dưỡng thể còm', 'admin'),
(19, '2022-10-21', 'gầy; da bọc xương; bụng óng', 'Suy dinh dưỡng thể còm', 'admin'),
(20, '2022-10-27', 'teo cơ; sút cân nhiều; gầy', 'Suy dinh dưỡng thể phối hợp', 'admin'),
(21, '2022-10-27', 'teo cơ; sút cân nhiều; gầy', 'Suy dinh dưỡng thể phối hợp', 'admin');

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recommendations`
--

CREATE TABLE `recommendations` (
  `id` bigint(20) NOT NULL,
  `recommendation` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recommendations`
--

INSERT INTO `recommendations` (`id`, `recommendation`, `disease_name`) VALUES
(1, ' Phục hồi mất nước:\nCháo muối: 1 nắm gạo (50g) + 1 nhúm muối (3.5g) + 6 bát ăn nước cơm, đun nhừ,\nlọc lấy nước uống\nNước gạo rang: 50g gạo rang vàng và nấu như cháo muối\n', 'Suy dinh dưỡng thể còm'),
(2, 'Nếu trẻ ít hơn 2 tuổi, nuôi con bằng sữa mẹ: Cho trẻ bú sữa mẹ càng sớm càng tốt, theo nhu cầu\nCho bú sữa mẹ hoàn toàn trong 6 tháng đầu,\nThời gian được bú sữa mẹ ít nhất 12 tháng, tốt nhất là 24 tháng\n', 'Suy dinh dưỡng thể còm'),
(3, 'Cho trẻ ăn bổ sung hợp lý:\nCho ăn bổ sung sau 6 tháng tuổi\nCho trẻ ăn từ ít đến nhiều, tập làm quen với thức ăn mới\nSố lượng thức ăn tăng theo độ tuổi\nĐảm bảo thức ăn mềm, dễ nhai, dễ nuốt\nThức ăn bổ cùng cần cân đối dinh dưỡng, có đủ các nhóm thức ăn\nTăng đậm độ năng lượng của thức ăn: thêm dầu, mỡ, vừng, lạc\nĐảm bảo vệ sinh thực phẩm\nCho trẻ ăn nhiều hơn trong và sau khi bị ốm, cho trẻ ăn uống nhiều chất lỏng hơn,\nđặc biệt là khi bị ỉa chảy và sốt cao\n', 'Suy dinh dưỡng thể còm'),
(4, ' Phục hồi mất nước:\nCháo muối: 1 nắm gạo (50g) + 1 nhúm muối (3.5g) + 6 bát ăn nước cơm, đun nhừ,\nlọc lấy nước uống\nNước gạo rang: 50g gạo rang vàng và nấu như cháo muối\n', 'Suy dinh dưỡng thể phù'),
(5, 'Nếu trẻ ít hơn 2 tuổi, nuôi con bằng sữa mẹ: Cho trẻ bú sữa mẹ càng sớm càng tốt, theo nhu cầu\nCho bú sữa mẹ hoàn toàn trong 6 tháng đầu,\nThời gian được bú sữa mẹ ít nhất 12 tháng, tốt nhất là 24 tháng\n', 'Suy dinh dưỡng thể phù'),
(6, 'Cho trẻ ăn bổ sung hợp lý:\nCho ăn bổ sung sau 6 tháng tuổi\nCho trẻ ăn từ ít đến nhiều, tập làm quen với thức ăn mới\nSố lượng thức ăn tăng theo độ tuổi\nĐảm bảo thức ăn mềm, dễ nhai, dễ nuốt\nThức ăn bổ cùng cần cân đối dinh dưỡng, có đủ các nhóm thức ăn\nTăng đậm độ năng lượng của thức ăn: thêm dầu, mỡ, vừng, lạc\nĐảm bảo vệ sinh thực phẩm\nCho trẻ ăn nhiều hơn trong và sau khi bị ốm, cho trẻ ăn uống nhiều chất lỏng hơn,\nđặc biệt là khi bị ỉa chảy và sốt cao\n', 'Suy dinh dưỡng thể phù'),
(7, ' Phục hồi mất nước:\nCháo muối: 1 nắm gạo (50g) + 1 nhúm muối (3.5g) + 6 bát ăn nước cơm, đun nhừ,\nlọc lấy nước uống\nNước gạo rang: 50g gạo rang vàng và nấu như cháo muối\n', 'Suy dinh dưỡng thể phối hợp'),
(8, 'Nếu trẻ ít hơn 2 tuổi, nuôi con bằng sữa mẹ: Cho trẻ bú sữa mẹ càng sớm càng tốt, theo nhu cầu\nCho bú sữa mẹ hoàn toàn trong 6 tháng đầu,\nThời gian được bú sữa mẹ ít nhất 12 tháng, tốt nhất là 24 tháng\n', 'Suy dinh dưỡng thể phối hợp'),
(9, 'Cho trẻ ăn bổ sung hợp lý:\nCho ăn bổ sung sau 6 tháng tuổi\nCho trẻ ăn từ ít đến nhiều, tập làm quen với thức ăn mới\nSố lượng thức ăn tăng theo độ tuổi\nĐảm bảo thức ăn mềm, dễ nhai, dễ nuốt\nThức ăn bổ cùng cần cân đối dinh dưỡng, có đủ các nhóm thức ăn\nTăng đậm độ năng lượng của thức ăn: thêm dầu, mỡ, vừng, lạc\nĐảm bảo vệ sinh thực phẩm\nCho trẻ ăn nhiều hơn trong và sau khi bị ốm, cho trẻ ăn uống nhiều chất lỏng hơn,\nđặc biệt là khi bị ỉa chảy và sốt cao\n', 'Suy dinh dưỡng thể phối hợp'),
(10, 'Cho trẻ ăn đủ thức ăn giàu vitamin A: hạt nêm, bơ thực vật, dầu thực vật, đường...', 'Thiếu vitamin A'),
(11, 'Ăn thực phẩm giàu sắt, giàu vitamin C để tăng cường hấp thu sắt', 'Thiếu máu dinh dưỡng'),
(12, 'Ăn các thực phẩm giàu vitamin: cà chua, rau ...', 'Thiếu máu dinh dưỡng'),
(13, 'Sử dụng muối i-ốt', 'Thiếu i-ốt và bướu cổ'),
(14, 'Sử dụng gia vị chứa i-ốt: bột canh, hạt nêm..', 'Thiếu i-ốt và bướu cổ'),
(15, 'Đảm bảo chế độ ăn cung cấp đủ nhu cầu kẽm', 'Thiếu kẽm'),
(16, 'Cung cấp đủ rau quả chứa nhiều vitamin C, giúp tăng hấp thụ kẽm', 'Thiếu kẽm'),
(17, 'Thay thế các loại thực phẩm có thành phần dinh dưỡng nhưng ít đường\nvà chất béo hơn như khoai lang, ngô. Có thể cho trẻ ăn nhiều rau xanh,\ncác loại trái cây thực phẩm chứa nhiều chất xơ.\n', 'Thừa cân, béo phì'),
(18, 'Không cho trẻ ăn các thức ăn nhiều dầu mỡ, đồ ăn chiên xào\nthay vào đó có thể hấp, luộc\n', 'Thừa cân, béo phì'),
(19, 'Cho trẻ ăn ít loại đồ ăn vừa chứa chất béo vừa nhiều\nđường như bánh nướng, khoai tây chiên, \n xúc xích...', 'Thừa cân, béo phì'),
(20, 'Nhận biết khả năng mất thăng bằng, nguyên nhân dẫn đến ngã và chấn thương nghiêm trọng. Ngồi xuống ngay lập tức khi bạn cảm thấy chóng mặt. Sử dụng ánh sáng tốt nếu bạn thức dậy vào ban đêm. Đi bộ với gậy để ổn định nếu bạn có nguy cơ bị ngã. Làm việc chặt chẽ với bác sĩ để quản lý các triệu chứng một cách hiệu quả.', 'Chóng mặt tư thế lành tính'),
(21, 'Rửa mặt hàng ngày bằng sữa rửa mặt không chứa dầu. Dùng sữa rửa mặt trị mụn không kê đơn để giúp loại bỏ dầu thừa. Sử dụng mỹ phẩm trang điểm gốc nước hoặc gắn mác “không gây dị ứng” để giảm tình trạng làm tắc nghẽn lỗ chân lông và sinh mụn. Tránh các sản phẩm chăm sóc da và trang điểm có chứa dầu. Tẩy trang và làm sạch da thật sạch trước khi ngủ. Tắm hoặc rửa mặt sau khi tập thể dục. Cột tóc (nếu tóc dài) để không che khuất khuôn mặt. Tránh đội mũ, băng đô bó sát đầu, quần áo ở các khu vực dễ nổi mụn. Duy trì chế độ ăn uống cân bằng và uống đủ nước. Giảm căng thẳng.', 'Mụn chứng cá'),
(22, 'Khi có các triệu chứng trên cần đi xét nghiệm để có kết quả chính xác. Nên có chế độ ăn uống cân bằng. Tập thể dục thường xuyên, nghỉ ngơi nhiều. Tránh sử dụng các chất kích thích. Quan hệ tình dụng an toàn. Nhận hỗ trợ từ các nhóm chuyên về bệnh.', 'AIDS'),
(23, 'Khi có các triệu chứng trên cần đi xét nghiệm để có kết quả chính xác. Nên có chế độ ăn uống cân bằng. Tập thể dục thường xuyên, nghỉ ngơi nhiều. Tránh sử dụng các chất kích thích. Quan hệ tình dụng an toàn. Nhận hỗ trợ từ các nhóm chuyên về bệnh.', 'Viêm gan do rượu'),
(24, 'Người bệnh có thể điều trị viêm mũi dị ứng theo nhiều cách khác nhau, bao gồm thuốc, cũng như các biện pháp khắc phục tại nhà và có thể là các loại thuốc thay thế. Do đó người bệnh cần được khám và tư vấn của bác sĩ của bạn trước khi thử bất kỳ biện pháp điều trị mới cho viêm mũi dị ứng.', 'Viêm mũi dị ứng'),
(25, 'Nên đến bệnh viện kiểm tra khi có các triệu chứng trên. Gặp bác sĩ để tư vấn về tình trạng của bệnh và tìm phương pháp điều trị thích hợp. Tập thể dục thường xuyên và nhẹ nhàng để giúp khớp dẻo dai. Duy trì chế độ dinh dưỡng hợp lý, giàu canxi, giảm lượng tinh bột.', 'Viêm khớp'),
(26, 'Khi có các triệu chứng trên cần đến bệnh viện để khám kỹ hơn. Có lối sống lành mạnh, tập thể dục đều đặn, vừa phải. Ăn uống hợp lý, bổ sung trái cây và rau xanh. Phòng tránh các yếu tố dễ gây khởi phát cơn hen như: tránh tiếp xúc khói bụi, thường xuyên vệ sinh nhà ở sạch sẽ,...', 'Hen phế quản'),
(27, '1. Trường hợp nhẹ: Đau đầu chóng mặt ở mức độ nhẹ và chịu đựng được nên tăng cường thời gian nghỉ ngơi, thả lỏng cơ thể và thư giãn để cơn đau được giảm một cách tự nhiên nhất. Có thể kết hợp với những bài xoa bóp, massage như day, bấm huyệt nhẹ nhàng để giúp việc tuần hoàn máu lên não tốt hơn Thực hiện chườm nóng / lạnh lên vùng cổ đau nhức ( nên chườm lạnh khi có những dấu hiệu sưng viêm đỏ và đau).\r\n2. Trường hợp nặng hơn cần đi khám bác sĩ để có phương pháp điều trị phù hợp.', 'Thoái hoá đốt sống cổ'),
(28, 'Ăn uống đầy đủ chất dinh dưỡng, ăn các thức ăn mềm, uống đủ nước, có thể uống thêm nước hoa quả Vệ sinh mũi họng hằng ngày bằng dung dịch nước muối sinh lý. Thay quần áo và tắm rửa hằng ngày bằng nước ấm sạch. Tránh gãi làm vỡ các nốt phỏng vì dễ gây bội nhiễm và tạo sẹo, gây mất thẩm mỹ, nếu đã vỡ dùng dung dịch xanh methylen bôi lên. Mặc quần áo mềm, rộng rãi, thoáng mát. Sử dụng các thuốc hạ sốt theo đúng hướng dẫn nếu sốt cao. Có thể sử dụng kháng sinh nếu có biểu hiện nhiễm trùng ở các nốt phỏng hoặc biến chứng như viêm phổi, viêm não màng não.', 'Thuỷ đậu'),
(29, 'Nên đến bệnh viện kiểm tra khi có các triệu chứng trên. Gặp bác sĩ để tư vấn về tình trạng của bệnh và tìm phương pháp điều trị thích hợp. Người bệnh cũng cần bổ sung canxi hoặc vitamin D để ngăn chặn tình trạng loãng xương. Hạn chế dùng muối để giảm các tích tụ trong gan. Thăm khám sức khỏe định kỳ thường xuyên để chẩn đoán tình trạng tiến triển của bệnh và có biện pháp đối phó kịp thời tránh biến chứng nguy hiểm.', 'Ứ mật mãn tính'),
(30, 'Đối với người lớn: cần đến sự hỗ trợ của y tế nếu đang trong các tình trạng sau: Sốt hơn 101,3 F (tức là 38,5°C); Sốt kéo dài hơn năm ngày hoặc quay trở lại sau khoảng thời gian hết sốt; Khó thở hoặc thở khò khè; Đau họng, đau đầu hoặc đau xoang nghiêm trọng\r\nĐối với trẻ em: cần phải đến cơ sở y tế ngay lập tức nếu có bất kỳ dấu hiệu nào dưới đây: Trẻ sơ sinh cho đến 12 tuần tuổi bị sốt 100,4 F (tức là 38°C); Sốt tăng hoặc kéo dài hơn hai ngày đối với trẻ ở mọi lứa tuổi; Các triệu chứng ngày càng xấu đi hoặc không có dấu hiệu cải thiện; Thở khò khè; Đau tai; Buồn ngủ bất thường; Chán ăn.\r\nĐể phòng ngừa bệnh nên: rửa tay thường xuyên; Khử trùng đồ đạc; dùng khăn giấy để che miệng khi hắt hơi, sổ mũi;', 'Cảm lạnh thông thường'),
(31, 'Khi bắt đầu phát sốt kèm theo các triệu chứng của sốt xuất huyết người bệnh có thể đi thăm khám ở bệnh viện. Với mức độ nhẹ người bệnh sẽ được chỉ định điều trị tại nhà, thời gian điều trị có thể lên đến từ 7 – 10 ngày tính từ ngày phát sốt đầu tiên.\r\n- Người bệnh điều trị sốt xuất huyết tại nhà cần được chăm sóc kỹ lưỡng. Có thể sử dụng thuốc Paracetamol để hạ sốt, liều dùng từ 10 – 15mg/1kg/lần, uống thuốc cách nhau ít nhất 4 giờ.\r\n- Người bệnh cần nghỉ ngơi, tránh hoạt động mạnh. \r\n- Uống đủ nước, tăng cường các loại nước trái cây, nước điện giải, nước cháo loãng. Nên cho người bệnh ăn các thức ăn mềm, dễ ăn.\r\n- Người bệnh nên tắm bằng nước ấm, lau người nhẹ nhàng không kỳ mạnh lên da.', 'Sốt xuất huyết'),
(32, '- Chế độ ăn phù hợp: đủ chất đạm, chất béo, đường, vitamin, muối khoáng và nước với khối lượng hợp lí.\r\n- Tập thể dục đều đặn: 30 phút mỗi ngày, 5 ngày mỗi tuần.\r\n- Kiểm soát đường huyết: tuân theo hướng dẫn của bác sĩ về các loại insulin được sử dụng.\r\n-Dùng theo phác đồ, tuân thủ giờ tiêm và liều lượng tránh bị tụt đường huyết. \r\n- Kiểm soát huyết áp: ưu tiên ức chế men chuyển/ức chế thụ thể khi có biến chứng thận (captopril, ibesartan, losartan..)', 'Tiểu đường'),
(33, '1. Điều trị tại nhà:\r\n- Ăn thực phẩm nhiều chất xơ. Ăn nhiều trái cây, rau và ngũ cốc.\r\n- Bôi kem hoặc thuốc bôi trĩ có chứa hydrocortison, hoặc sử dụng miếng lót có chứa witch haze hoặc chất gây tê.\r\n- Ngâm thường xuyên trong bồn nước ấm hoặc tắm ngồi. Ngâm vùng hậu môn trong nước ấm từ 10 đến 15 phút và từ hai đến ba lần một ngày.\r\n- Giữ cho vùng hậu môn sạch sẽ. Tắm hàng ngày để làm sạch vùng da xung quanh hậu môn một cách nhẹ nhàng bằng nước ấm. Tránh dùng khăn lau có cồn hoặc nước hoa. Lau nhẹ nhàng hoặc sử dụng máy sấy khô.\r\n- Chườm túi nước đá hoặc chườm nước lạnh lên vùng hậu môn để giảm sưng.\r\n- Uống thuốc giảm đau.\r\n2. Thuốc:\r\nNếu bệnh chỉ gây ra sự khó chịu nhẹ, bác sĩ có thể chỉ định sử dụng các loại kem không kê đơn, thuốc mỡ, thuốc đạn hoặc miếng lót.\r\n3. Cắt trĩ:\r\nTùy theo mức độ của bệnh mà bác sĩ sẽ đưa ra lời khuyên nếu cần phải loại bỏ.', 'Trĩ'),
(34, '\"Dựa vào biểu hiện của người bệnh mà bác sĩ sẽ có các biện pháp phù hợp:\r\n- Ngừng thuốc: Tùy thuộc vào các biểu hiện khác nhau mà bác sĩ có thể có các điều trị khác nhau. Tuy nhiên việc ngừng ngay thuốc nghi ngờ là biện pháp có thể áp dụng cho tất cả các trường hợp.\r\n- Kháng histamine: bác sĩ có thể cho bạn thuốc kháng histamine vì thuốc này có tác dụng đối kháng lại histamine là một chất hóa học được giải phóng ra trong phản ứng dị ứng, theo đó có thể làm giảm phù nề, giãn mạch và giảm ngứa.\r\n- Corticosteroid: trong một số trường hợp nặng hơn, bác sĩ có thể điều trị cho bạn bằng các thuốc corticoid để giảm phản ứng dị ứng và chống viêm. Có thể dùng đường tiêm tĩnh mạch hoặc đường uống.\"', 'Phản ứng quá mẫn thuốc'),
(35, 'Khi xuất hiện các triệu chứng, người bệnh nên đi khám để có biện pháp điều trị đạt hiệu quả.\r\n- Dừng hoặc hạn chế các loại thuốc giảm đau và kháng viêm để ổn định lại các enzym trong hệ thống bảo vệ niêm mạc dạ dày.\r\n- Dùng thuốc bảo vệ niêm mạc, thuốc điều trị diệt vi khuẩn HP.\r\n- Ăn uống điều độ, đúng bữa, khoa học, hạn chế rượu bia, đồ ăn chua cay.\r\n- Thường xuyên tập thể dục, tránh lo lắng, stress.', 'Viêm niêm mạc hang vị dạ dày'),
(36, 'Khi có những dấu hiệu trên, bạn nên đến bệnh viện gần nhất để khám và điều trị. Bác sĩ sẽ hướng dẫn và có phác đồ điều trị chi tiết. \r\nMột số biện pháp phòng tránh bệnh:\r\n- Giữ cân nặng ở mức bình thường.\r\n- Tránh mặc đồ quá chật.\r\n- Tránh đồ ăn và đồ uống gây ợ nóng.\r\n- Chia nhỏ các bữa ăn, tránh ăn nhiều vào một lúc.\r\n- Sau ăn đừng nằm ngay mà đợi ít nhất 3 tiếng sau ăn rồi mới nằm hoặc ngủ.\r\n- Không sử dụng các chất kích thích.', 'Trào ngược dạ dày thực quản'),
(37, 'Đây là tình trạng y tế khẩn cấp. Do đó, người bệnh cần được điều trị khẩn trương để tăng cơ hội sống sót và giảm tổn thương tim. Nếu bạn hoặc một người xung quanh có dấu hiệu của đau tim, hay nhanh chóng đưa họ đến cơ sở y tế gần nhất để khám và điều trị.', 'Đau tim'),
(38, 'Nếu có các triệu chứng của bệnh, bạn nên đến cơ sở y tế gần nhất để khám và nhận hướng dẫn của bác sĩ. Ngoài các thuốc kê đơn của bác sĩ, bệnh nhân mắc viêm gan A cần:\r\n- Nghỉ ngơi\r\n- Ăn uống thức ăn giàu chất dinh dưỡng\r\n- Tránh sự tiếp xúc thân mật với người khác\r\n- Thường xuyên đến gặp bác sĩ để theo dõi tiến triển của bệnh.', 'Viêm gan A'),
(39, 'Nếu có các triệu chứng của bệnh, bạn nên đến cơ sở y tế gần nhất để khám và nhận hướng dẫn của bác sĩ. Khi mắc bệnh cần nghỉ ngơi, chế độ ăn uống nên chú ý đến các loại thực phẩm có lợi cho gan, hạn chế uống rượu.', 'Viêm gan B'),
(40, 'Nếu có các triệu chứng của bệnh, bạn nên đến cơ sở y tế gần nhất để khám và nhận hướng dẫn của bác sĩ. Một số phương pháp phòng ngừa bệnh:\r\n- Tuyệt đối không dùng chung kim tiêm.\r\n- Tránh tiếp xúc trực tiếp với máu hoặc các chế phẩm từ máu.\r\n- Không dùng chung các vật dụng chăm sóc cá nhân.\r\n- Quan hệ tình dục an toàn.\r\n- Duy trì lối sống lành mạnh, hạn chế sử dụng các chất kích thích', 'Viêm gan C'),
(41, 'Nếu có các triệu chứng của bệnh, bạn nên đến cơ sở y tế gần nhất để khám và nhận hướng dẫn của bác sĩ. Một số biện pháp phòng ngừa:\r\n- Tiêm phòng đầy đủ nhất là cho trẻ nhỏ và người có nguy cơ cao.\r\n- Quan hệ tình dục an toàn.\r\n- Nên cẩn thận khí xăm hình và xỏ khuyên.\r\n- Không nên lạm dụng các chất kích thích.\r\n- Nên khám định kì để phát hiện sớm nếu có các bệnh mắc phải.', 'Viêm gan D'),
(42, 'Bệnh thường tự khỏi không để lại biến chứng. Bệnh nhân thường được khuyên nên nghỉ ngơi, ăn uống đầy đủ các chất dinh dưỡng và chất lỏng, tránh uống rượu và cần xin tư vấn bác sĩ trước khi sử dụng bất cứ loại thuốc có thể gây tổn thương gan, đặc biệt là acetaminophen. Trong trường hợp bệnh diễn biến mạn tính, các loại thuốc được chỉ định là ribavirin, peginterferon hoặc kết hợp giữa peginterferon và ribavirin. Loại thuốc, liều dùng và thời gian sử dụng tùy thuộc và tình trạng sức khỏe của từng bệnh nhân.', 'Viêm gan E'),
(43, 'Tăng huyết áp là bệnh cần điều trị suốt đời, không thể bỏ thuốc. Cần duy trì uống thuốc đều đặn, tránh trường hợp đo huyết áp thấy cao mới uống. Dùng thuốc tuyệt đối theo chỉ định của bác sĩ. Để phòng tránh bệnh, chúng ta nên:\r\n- Chế độ ăn lành mạnh: nhiều rau xanh, giảm muối, ít dùng mỡ động vật.\r\n- Tập thể dục thường xuyên.\r\n- Không nên sử dụng các chất kích thích.\r\n- Tránh lo âu, căng thẳng thần kinh.\r\n- Nghỉ ngơi và thư giãn một cách hợp lý.', 'Tăng huyết áp'),
(44, 'Bệnh nhân gặp các vấn đề về rối loạn lưỡng cực cần được thăm khám để các bác sĩ có hướng can thiệp kịp thời như sử dụng các thuốc ổn định khí sắc hoặc sử dụng biện pháp tâm lý học trị liệu. Bên cạnh đó người bệnh không nên chủ quan để tình trạng này kéo dài bởi có thể ảnh hưởng nghiêm trọng đến sức khỏe về sau. Để phòng ngừa bệnh, chúng ta nên:\r\n- Có chế độ ăn uống khoa học, đủ chất dinh dưỡng\r\n- Tập thể dục đều đặn để cải thiện tâm trạng và sức khỏe\r\n- Có các mối quan hệ lành mạnh\r\n- Tăng cường tiếp xúc, trò chuyện với mọi người, tham gia hoạt động xã hội hoạt động tập thể, đi du lịch\r\n- Ngủ đủ giấc và không lạm dụng chất kích thích', 'Thay đổi tâm trạng'),
(45, 'Nên bổ sung các thực phẩm giàu glucose, uống nước trái cây. Cách đơn giản nhất là ăn kẹo. Nếu người bệnh bị lú lẫn, co giật, hôn mê nên liên lạc đến cơ sở y tế gần nhất. Để phòng ngừa bệnh, chúng ta nên:\r\n- Ăn uống điều độ, cân bằng dinh dưỡng.\r\n- Cần ăn các bữa nhẹ khi lượng đường quá thấp hoặc gặp các triệu chứng của bệnh.\r\n- Kiểm tra sức khỏe định kỳ.\r\n- Không nhịn đói hoặc để cơ thể bị đói quá lâu.\r\n- Tuân thủ chỉ định của bác sĩ về chế độ dùng thuốc và chế độ ăn uống.\r\n- Không sử dụng các chất kích thích.', 'Hạ đường huyết'),
(46, 'Nếu có các triệu chứng trên cần đến các cơ sở y tế để khám và nhận lời khuyên từ các chuyên gia. Khi bị suy tuyến cận giáp, tốt nhất bạn nên tham khảo ý kiến từ chuyên gia dinh dưỡng để xây dựng một chế độ ăn phù hợp. Nhìn chung, bạn nên chú ý:\r\n- Ăn thực phẩm giàu canxi. Các nguồn thực phẩm từ sữa, rau lá xanh, bông cải xanh và thực phẩm có bổ sung thêm canxi (như sữa đậu nành hay ngũ cốc ăn sáng) sẽ giúp duy trì nồng độ khoáng chất này trong máu.\r\n- Ăn ít phospho. Bạn lưu ý tránh sử dụng các loại nước ngọt có gas vì chúng chứa photpho dưới dạng axit photphoric và hạn chế các loại thịt, phô mai cứng, ngũ cốc nguyên hạt.', 'Suy tuyến giáp'),
(47, 'Nếu bạn thấy những triệu chứng đó, hãy đưa trẻ đến gặp bác sĩ chuyên khoa để được thăm khám và điều trị. Chốc lở thường được điều trị bằng thuốc kháng sinh bôi hoặc uống. Nếu bạn có nhiều vết lở loét, bác sĩ có thể kê cho bạn đơn thuốc kháng sinh uống. Để kiểm soát và ngăn ngừa bệnh, chúng ta cần:\r\n- Vệ sinh sạch sẽ các vị trí bị nhiễm bệnh bằng xà phòng và nước.\r\n- Che các vết vảy và vết loét cho đến khi chúng lành lại.\r\n- Nhẹ nhàng loại bỏ vảy cứng.\r\n- Rửa tay bằng xà phòng và nước sau khi chạm vào vùng bị nhiễm bệnh hoặc người bị nhiễm bệnh.\r\n- Khi bôi thuốc mỡ kháng sinh nên đeo găng tay và rửa tay kỹ sau đó\r\n- Thường xuyên rửa tay.\r\n- Hạn chế tiếp xúc với đồ vật của người bệnh.', 'Bênh chốc lở/ bệnh lở da'),
(48, '\"Nên đưa người bệnh đến cơ sở y tế gần nhất để khám và nhận hướng dẫn từ bác sĩ. Điều trị vàng da sẽ được tiến hành khi xác định được nguyên nhân và có phương pháp điều trị đặc hiệu, có thể là điều trị nội khoa hoặc điều trị ngoại khoa như loại bỏ sỏi mới có thể giải quyết được căn nguyên gây vàng da.\r\nVàng da, vàng mắt là một triệu chứng quan trọng trọng nhiều bệnh, liên quan nhiều đến các bệnh lý về hồng cầu, gan, mật hoặc một số tác hại của thuốc với nhiều mức độ và bệnh cảnh từ nhẹ đến đặc biệt nghiêm trọng. Một số bệnh có thể được phát hiện sớm thông qua triệu chứng vàng da và có thể chữa khỏi hoàn toàn. Nên đi khám sớm khi chỉ cần có triệu chứng vàng da, củng mạc mắt ánh vàng hoặc chỉ khi nước tiểu vàng sậm.\"', 'Bệnh vàng da'),
(49, 'Khi có các triệu chứng của bệnh, nên đến các cơ sở gần nhất để khám và điều trị. Để phòng tránh bệnh, chúng ta nên: \r\n- Tuyên truyền giáo dục phòng chống sốt rét, khi bị sốt người bệnh cần đến cơ sở y tế để khám và điều trị.\r\n- Ngủ màn kể cả ở nhà, nương rẫy hoặc ngủ trong rừng.\r\n- Phòng chống muỗi truyền bệnh vẫn được coi là biện pháp hữu hiệu nhất.\r\n- Xoa kem chống muỗi.\r\n- Phát quang bụi rậm, khơi thông cống rãnh.', 'Bệnh sốt rét'),
(50, 'Hiện nay vì chưa hiểu rõ nguyên nhân gây bệnh nên việc điều trị tối ưu nhất của bệnh đau nửa đầu bao gồm điều trị giảm nhẹ triệu chứng đau và giảm tái phát. Chiến lược điều trị cụ thể thay đổi tuỳ thuộc vào tần suất và cường độ của các cơn đau đầu mà bệnh nhân gặp phải. Đến và liên hệ với cơ sở khám chữa bệnh gần nhất để được chẩn đoán và đưa ra hướng điều trị tốt nhất.', 'Đau nửa đầu'),
(51, 'Cần đến các cơ sở y tế để thực hiện các xét nghiệm và chẩn đoán, đưa ra hướng điều trị. Viêm xương khớp có thể kết hợp điều trị nội khoa sử dụng thuốc, vật lý trị liệu, thay đổi lối sống. Cần sớm điều trị để tránh những biến chứng về sau này.', 'Viêm xương khớp'),
(52, 'Cần đến các trung tâm y tế để được chụp CT sọ não hoặc MRI sọ não để xác định chẩn đoán về xuất huyết não. Điều trị xuất huyết não phụ thuộc vào vị trí, nguyên nhân và mức độ xuất huyết. Có thể tiến hành phẫu thuật để làm giảm phù hoặc ngăn ngừa chảy máu. Tuỳ thuộc vào vị trí của cục máu đồng, bác sĩ sẽ phẫu thuật mở sọ hoặc chọc hút theo hướng dẫn của quang tuyến. Một số loại thuốc cũng có thể được chỉ định, bao gồm giảm đau, corticoid hoặc thuộc lợi tiểu để giảm phù, thuốc chống co giật để kiểm soát co giật. Người bệnh sẽ cần phải điều trị dài để khắc phục triệu chứng do tổn thương não. Tuỳ thuộc vào các triệu chứng, điều trị có thể bao gồm vật lí trị liệu, tập nói và một số liệu pháp khác', 'Xuất huyết não'),
(53, 'Bệnh viêm loét dạ dày ở thời kỳ sớm và được phát hiện kịp thời sẽ dễ dàng điều trị. Nếu để bệnh chuyển sang giai đoạn mãn tính thì sẽ khó chữa khỏi dứt điểm và thường gây ra các biến chứng đáng tiếc. Do vậy, ngoài việc điều chỉnh và duy trì các chế độ ăn uống, nghỉ ngơi và sinh hoạt điều độ, hạn chế ăn các thức ăn có tính kích thích, người bệnh nên đến bệnh viện, phòng khám gần nhất để được chẩn đoán, đồng thời có các phương pháp, phác đồ điều trị bệnh thích hợp.', 'Viêm loét dạ dày'),
(54, 'Hiện nay bệnh viêm phổi có nhiều loại và nhiều nguyên nhân khác nhau. Theo thống kê có tới hơn 50 loại viêm phổi ở mức độ từ nhẹ đến nặng. Bệnh viêm phổi cũng có thể tự khỏi nhưng cũng có nhiều trường hợp biến chứng tử vong. Chính vì thế, cần đến khám tại các trung tâm y tế kiểm tra, chẩn đoán, bác sĩ đưa ra hướng điều trị. Bệnh viêm phổi có thể điều trị dứt điểm nếu phát hiện kịp thời. Phương pháp điều trị cần phù hợp với từng triệu chứng và tình hình phát triển của bệnh. Tuy nhiên, trong một số trường hợp khi bệnh đã chuyển biến nặng, việc điều trị sẽ hết sức khó khăn', 'Viêm phổi'),
(55, 'Đến thời điểm hiện tại vẫn chưa có biện pháp nào điều trị dứt điểm bệnh vảy nến. Mục tiêu chính của các biện pháp điều trị là giảm viêm và kiểm soát tính trạng tăng sinh tế bào da, giúp người bệnh ngăn nừa và hạn chế tối đa các biến chứng của bệnh. Người bệnh cần nên đi khám và tuân thủ theo chỉ định của bác sĩ chuyên khoa da liễu. Một số phương pháp điều trị có thể kể đến như: Điều trị tại chỗ; Điều trị toàn thân; Quang trị liệu; Sử dụng thuốc sinh học.', 'Vẩy nến'),
(56, 'Các triệu chứng của bệnh lao phổi cũng thường được gặp ở nhiều bệnh khác nhau, chính vì vậy để có kết quả chẩn đoán chính xác cần thiết phải làm những xét nghiệm chuyên biệt để có các phác đồ điều trị phù hợp. Đối với các bệnh nhân bị lao phổi tuỳ từng thể trạng cơ thể mà có biện pháp điều trị khác nhau, tuy nhiên phương pháp hữu hiệu nhất là sử dụng thuốc đặc trị lao với 2 loại chính là Thuốc chống lao thiết yếu (isoniazid, rifampicin, ryrazinamid, steptomycin, ethambutol) và Thuốc chống lao hàng 2 (karamycin, amikacin, capreomycin, nhóm fluoroquinolones). Bên cạnh việc sử dụng thuốc, việc duy trì thói quen sinh hoạt khoa học cũng là một biện pháp quan trọng giúp hạn chế sự phát triển của vi khuẩn lao.', 'Bệnh lao'),
(57, 'Bệnh có tính lây nhiễm cao, bệnh nhân sốt thương hàn cần được tiến hành điều trị tuân theo các nguyên tắc cơ bản sau: Cách ly người bệnh và tiến hành điều trị tại chỗ để giảm thiểu khả năng lây lan. Theo dõi sát bệnh nhân để kịp thời phát hiện và chữa trị các biến chứng. Bước đầu điều trị bệnh bằng kháng sinh theo đúng phác đồ. Tình trạng kháng sinh đang ngày càng phổ biến trong cộng đồng, vì thế việc lựa chọn kháng sinh nên dựa theo kết quả kháng sinh đồ. Kháng sinh được chọn có thể sử dụng dưới dạng tiêm hoặc uống tuỳ thuộc vào tình trạng bệnh cảnh nặng hay nhẹ của người bênh. Liên hệ bác sĩ để được đưa ra phác đồ.', 'Bệnh thương hàn'),
(58, 'Hãy đến khám bác sĩ! Nhân viên y tế sẽ yêu cầu lấy mẫu nước tiểu của bạn để xét nghiệm tìm vi khuẩn gây bệnh. Sau đó bác sĩ sẽ kê kháng sinh để diệt kẻ xâm nhập. Người bệnh nên uống thuốc đúng theo liệu trình và uống thật nhiều nước để giúp đẩy vi khuẩn ra khỏi cơ thể.', 'Nhiễm trùng đường tiết niệu'),
(59, 'Hiện nay bệnh suy giãn tĩnh mạch có các phương pháp điều trị như sau: Liệu pháp xơ hoá; Laser đốt bỏ tĩnh mạch; Sử dụng vớ y khoa. Suy giãn tĩnh mạch là bệnh lý tiến triển âm thầm, người bệnh cần đến bệnh viện thăm khám trực tiếp và tiếp nhận điều trị y tế từ bác sĩ.', 'Suy tĩnh mạch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `symptoms`
--

CREATE TABLE `symptoms` (
  `id` bigint(20) NOT NULL,
  `symptom_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` float NOT NULL,
  `disease_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `symptoms`
--

INSERT INTO `symptoms` (`id`, `symptom_name`, `weight`, `disease_name`) VALUES
(1, 'Da bọc xương, teo cơ', 3, 'Suy dinh dưỡng thể còm'),
(2, 'Mắt mỡ dưới da', 3, 'Suy dinh dưỡng thể còm'),
(3, 'Bộ mặt của ông già', 3, 'Suy dinh dưỡng thể còm'),
(4, 'Bụng ỏng, phình ra', 2, 'Suy dinh dưỡng thể còm'),
(5, 'Khó chịu, bứt rứt, quấy khóc', 1, 'Suy dinh dưỡng thể còm'),
(6, 'Phù chân tay mặt', 2, 'Suy dinh dưỡng thể phù'),
(7, 'Sút cân vừa phải', 3, 'Suy dinh dưỡng thể phù'),
(8, 'Mặt tròn, vòng cánh tay nhỏ, cơ yếu', 2, 'Suy dinh dưỡng thể phù'),
(9, 'Kém ngon miệng', 1, 'Suy dinh dưỡng thể phù'),
(10, 'Bứt rứt, lãnh đạm, thờ ơ, quấy khóc', 1, 'Suy dinh dưỡng thể phù'),
(11, 'Tóc mỏng, thưa, dễ nhổ', 2, 'Suy dinh dưỡng thể phù'),
(12, 'Sút cân nhiều', 3, 'Suy dinh dưỡng thể phối hợp'),
(13, 'Phù chân tay mặt', 3, 'Suy dinh dưỡng thể phối hợp'),
(14, 'Tóc mỏng, thay đổi da', 3, 'Suy dinh dưỡng thể phối hợp'),
(15, 'Gầy', 1, 'Suy dinh dưỡng thể phối hợp'),
(16, 'Thay đổi tinh thần', 2, 'Suy dinh dưỡng thể phối hợp'),
(17, 'Giảm thị lực trong điều kiện thiếu ánh sáng', 2, 'Thiếu vitamin A'),
(18, 'Không nhìn rõ lúc chập tối', 1, 'Thiếu vitamin A'),
(19, 'Sợ đi, ngồi 1 chỗ', 1, 'Thiếu vitamin A'),
(20, 'Đi vấp ngã, đi không đúng chỗ', 1, 'Thiếu vitamin A'),
(21, 'Mảng nổi lên có màu trắng sáng hoặc vàng nhạt,\nhình oval hoặc tam giác ở vị trí góc mũi hoặc thái dương\n', 3, 'Thiếu vitamin A'),
(22, 'Bề mặt mắt có vẩy hoặc chấm trắng như đám mây', 3, 'Thiếu vitamin A'),
(23, 'Sợ ánh sáng, chói, hay dụi mắt', 2, 'Thiếu vitamin A'),
(24, 'Bề mặt mắt bị phủ 1 lớp mây trắng đục,\ntoàn bộ giác mạc bị mềm nhũn\n', 3, 'Thiếu vitamin A'),
(25, 'Giác mạc bị đục', 3, 'Thiếu vitamin A'),
(26, 'Mệt mỏi, thờ ơ, ù tai, hoa mắt chóng mặt', 3, 'Thiếu máu dinh dưỡng'),
(27, 'Đau đầu, giảm trí nhớ, mất ngủ, tê tay chân', 3, 'Thiếu máu dinh dưỡng'),
(28, 'Đánh trống ngực, khó thở', 3, 'Thiếu máu dinh dưỡng'),
(29, 'Da xanh, niêm mạc nhợt nhạt', 3, 'Thiếu máu dinh dưỡng'),
(30, 'Lưỡi màu nhợt', 2, 'Thiếu máu dinh dưỡng'),
(31, 'Tóc rụng, móng tay giòn, dễ gãy', 1, 'Thiếu máu dinh dưỡng'),
(32, 'Mạch nhanh', 1, 'Thiếu máu dinh dưỡng'),
(33, 'Sờ thấy tuyến giáp, mỗi thùy bên của tuyến giáp\ncó kích thước lớn hơn đốt ngón tay cái\n', 3, 'Thiếu i-ốt và bướu cổ'),
(34, 'Ngửa cổ nhìn thấy tuyến giáp di động khi nuốt', 3, 'Thiếu i-ốt và bướu cổ'),
(35, 'Tuyến giáp to, nhìn thấy bướu khi cổ ở tư thế bình thường', 3, 'Thiếu i-ốt và bướu cổ'),
(36, 'Thấp còi, nhẹ cân', 1, 'Thiếu kẽm'),
(37, 'Chán ăn, rối loạn nhận thức', 3, 'Thiếu kẽm'),
(38, 'Thừa cân, nhiều mỡ', 3, 'Thừa cân, béo phì'),
(39, 'Thường xuyên đói bụng', 1, 'Thừa cân, béo phì'),
(40, 'Tê chân tay', 2, 'Thừa cân, béo phì');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `phonenumber`, `role`) VALUES
(1, 'admin', '123456', 'bruce', 'wayne', 'admin@gmail.com', '123456789', 'user'),
(2, 'admin1', '123456', 'michael', 'jordan', 'admin2@gmail.com', '2346623655', 'user'),
(3, 'user1', '123456', 'david', 'beckham', 'user@gmail.com', '+848888888', 'user'),
(4, 'user2', '123456*', 'marcus', 'rashford', 'user2@gmail.com', '+84999999999', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--


--
-- Chỉ mục cho bảng `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback_rateds`
--
ALTER TABLE `feedback_rateds`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `medical_histories`
--
ALTER TABLE `medical_histories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

-- AUTO_INCREMENT cho bảng `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `feedback_rateds`
--
ALTER TABLE `feedback_rateds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `medical_histories`
--
ALTER TABLE `medical_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
