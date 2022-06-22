-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 22, 2022 la 05:37 PM
-- Versiune server: 10.4.24-MariaDB
-- Versiune PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `softdrinksorganiser`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(50, 'andrei@yahoo.com'),
(51, 'ionutsebastian210@yahoo.com'),
(8, 'ionutsebastian210@yahoo.com123'),
(23, 'ionutsebastian210@yahoo.com12312312'),
(28, 'ionutsebastian210@yahoo.com123123123'),
(26, 'ionutsebastian210@yahoo.com12341234'),
(48, 'random@gmail.com');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `countries` varchar(200) DEFAULT NULL,
  `stores` varchar(100) DEFAULT NULL,
  `manufacturing_places` varchar(100) DEFAULT NULL,
  `ingredients` varchar(1000) DEFAULT NULL,
  `allergens` varchar(100) DEFAULT NULL,
  `calories` double DEFAULT NULL,
  `fat` double DEFAULT NULL,
  `carbs` double DEFAULT NULL,
  `sugar` double DEFAULT NULL,
  `fiber` double DEFAULT NULL,
  `protein` double DEFAULT NULL,
  `salt` double DEFAULT NULL,
  `food_group` varchar(100) DEFAULT NULL,
  `nutrigrade` varchar(2) DEFAULT NULL,
  `link` varchar(400) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `products`
--

INSERT INTO `products` (`id`, `name`, `size`, `brand`, `category`, `countries`, `stores`, `manufacturing_places`, `ingredients`, `allergens`, `calories`, `fat`, `carbs`, `sugar`, `fiber`, `protein`, `salt`, `food_group`, `nutrigrade`, `link`, `views`) VALUES
(1, 'Brasserie Kronenbourg', '250 ml', 'Kronenbourg', 'non-alcoholic-beer', 'France', '', 'France,Obernai', 'water, orge malt, co2, natural flavours, hop extract', 'gluten', 15, 0, 3.4, 0, 0, 0.3, 0.01, 'unsweetened-beverages', '', 'https://world.openfoodfacts.org/product/3080216055428', 84),
(2, 'HEPAR eau minerale naturelle', '1000 ml', 'Hepar', 'water', 'France', 'Intermarche', 'France', 'natural mineral water', '', 0.0001, 0.0001, 0.0001, 0.0001, 0.0001, 0.0001, 0.0001, 'unsweetened-beverages', 'a', 'https://world.openfoodfacts.org/product/7613035974685', 4),
(3, 'Oat Original', '1l', 'Alpro', 'plant-milk', 'Germany', '', '', 'water, oats (10%), chicory root fibre, sunflower oil, calcium (tricalcium phosphate), sea salt, stabilizer: gellan, vitamins (riboflavin (b2), b12, d2)', 'gluten', 43, 1.5, 6.6, 3.2, 1.4, 0.3, 0.09, 'plant-based-milk-substitutes', 'a', 'https://world.openfoodfacts.org/product/5411188123132', 8),
(4, 'Soya Drink - Original - Alpro', '1l', 'Alpro', 'plant-milk', 'France, Allemagne, Allemagne, Autriche, Belgique, Suisse', 'Carrefour Market,Magasins U,Carrefour,Auchan,Lidl,Kliver,Edeka,Netto Marken-Discount,carrefour.fr', '93589 Saint-Ouen', 'soy base (water, non-gmo soya beans shelled (france) (8%)), sugar, acidity regulators (potassium phosphates), calcium carbonate, flavor, table salt, stabilizer (gellan gum), vitamins (b2, b12, d2),', 'soybeans', 39, 1.8, 2.5, 2.5, 0.5, 3, 0.09, 'plant-based-milk-substitutes', 'a', 'https://world.openfoodfacts.org/product/5411188115472', 7),
(5, 'NESCAFÉ SPECIAL FILTRE L\'Original', '200 g', 'Nestlé, Nescafe, Special filtre', 'coffee', 'Belgique, France, Suisse', 'Magasins U, carrefour.fr', '', 'soluble coffee,', '', 118, 0.2, 3.1, 3.1, 34.1, 7, 0.25, '', '', 'https://world.openfoodfacts.org/product/3033710074525', 81),
(6, 'Soy Milky Low Sugar  - Vitasoy', '1L', 'Vitasoy', 'plant-milk', 'Australia', 'Woolworths, Coles', '', 'Filtered water, whole soybeans (min.14%), rawsugar, mineral (calcium phosphate), natural flavour, sea salt.', 'soybeans', 98, 4.5, 6.2, 4, 0.5, 7.5, 0.5, 'plant-based-milk-substitutes', 'a', 'https://world.openfoodfacts.org/product/9310232100906', 4),
(7, 'Cristaline', '1,5 l', 'Cristaline', 'water', 'Côte d\'Ivoire, France, Guadeloupe, Italie, Luxembourg,', 'Carrefour,Leclerc,Auchan,Intermarché,Super U,E.Leclerc', 'France  72370  Ardenay-sur-Merize', 'just water.', '', 0, 0, 0, 0, 0, 0, 0.02, 'unsweetened-beverages', 'b', 'https://world.openfoodfacts.org/product/3274080005003', 0),
(8, 'Republic of blends Macchiato - Emmi', '230 ml', 'Emmi', 'coffee', 'France', 'monoprix,auchan,hyper u,super u,utile,monop,match,cora,leclerc, carrefour.fr', 'Suisse', 'Lait enrichi de crème 80 %, café Arabica brassé* 17 %, sucre. Pasteurisé. Teneur en caféine: 80 mg par gobelet.\r\n*Rainforest Alliance Certified™', 'milk', 79.28, 4, 7.9, 7.4, 0.12, 2.7, 0.07, 'teas-and-herbal-teas-and-coffees', 'b', 'https://world.openfoodfacts.org/product/7610900227990', 2),
(9, 'Kombucha', '750ml', 'Remedy', 'water', 'Australia', 'woolworths, Coles', 'Australia', 'Certified organic raw kombucha (sparkling water, wild kombucha culture, black tea*, green tea*), natural sweeteners (erythritol* and steviol glycosides&quot;), *Certified organic ingredients', '', 9, 1, 5.3, 0, 1, 1, 0.0125, 'artificially-sweetened-beverages', 'b', 'https://world.openfoodfacts.org/product/9350271001871', 3),
(10, 'Non-Dairy Soya With Calcium', '1L', 'Soyfresh', 'plant-milk', 'Philippines', '', '', 'Soya Bean Extract, Water, Cane Sugar, Maltodextrin, Calcium Carbonate, Emulsifier [Mono &Diglycerides of Fatty Acids (471), Stabiliser [Carrageenan (407), Sodium Alginate (401), Guar Gum (412)], Acidity Regulator [Potassium Phosphate (340), Potassium Carbonate (501)] and Vitamins (B2, B1, A, D, B12). Contains Soya.', 'soybeans', 48, 1.6, 6, 4.9, 0, 2.5, 0.02794, 'plant-based-milk-substitutes', 'b', 'https://world.openfoodfacts.org/product/9556007000556', 17),
(11, 'Redbull', '250ml', 'Red Bull', 'energy-drink', 'Deutschland, Europäische Union', 'Verschiedene', 'Fuschl am See', 'water, sucrose, glucose, acidifier (citric acid), carbonic acid, taurine (0.4%), acidic regulators (sodium carbonates, magnesium carbonates), caffeine (0.03%), vitamins (niacin, pantothenic acid, b6, b12), flavors, colourings (sugar caramel, riboflavine),', '', 46, 0, 11, 11, 0, 0, 0.1, '', 'e', 'https://world.openfoodfacts.org/product/90162565', 12),
(12, 'Don Simon Orange Juice Glass', '200ml', 'Don Simon', 'non-carbonated-drink', 'France', '', '', 'orange juice.', '', 43, 0, 10, 10, 0, 0.3, 0.015, 'fruit-juices', 'c', 'https://world.openfoodfacts.org/product/8410261651705', 7),
(13, 'K-take it veggie Bio Haferdrink', '1 l', 'K-take it veggie,Milch', 'plant-milk', 'Deutschland', 'Kaufland', 'Quargentan S.P.A.,Italien,Italy', 'Water, Oat* (12%), Sunflower oil*, sea salt\r\n\r\n*made from controlled organic agriculture', 'gluten, glutenhaltiges-weizen', 45, 1.2, 8, 6, 0.3, 0.3, 0.08, 'plant-based-milk-substitutes', 'b', 'https://world.openfoodfacts.org/product/4337185832765', 0),
(14, 'Auvitis Count Sparkling Red Grape Juice', '750ml', 'Auvitis Count', 'carbonated-drink', 'Australia', '', 'Australia', 'sparkling grape juice', '', 0, 0.2, 19, 0, 0, 0.4, 0.023, 'fruit-juices', '', 'https://world.openfoodfacts.org/product/2000000135529', 17),
(15, 'Izze sparkling juice blackerry', '248 ml', 'Izze', 'carbonated-drink', 'United States', 'Costco', '', 'SPARKLING WATER, APPLE JUICE CONCENTRATE, GRAPE JUICE CONCENTRATE, NATURAL FLAVOR, BLACKBERRY JUICE CONCENTRATE, RASPBERRY JUICE CONCENTRATE, CITRIC ACID, ACEROLA JUICE CONCENTRATE, ASCORBIC ACID (VITAMIN C), NIACINAMIDE, PIRIDOXINE HYDROCHLORIDE (VITAMIN B6)', '', 36.29032258, 0, 8.870967742, 8.064516129, 0.1, 0, 0.02016129, 'unsweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/836093011025', 3),
(16, 'Soy beverage', '1litre', 'Soy Milky', 'plant-milk', 'India', '', '', 'Purified Water, Soybean (20%)', 'soybeans', 39, 1.8, 1.3, 0.5, 0.3, 4.2, 0.024, 'plant-based-milk-substitutes', 'a', 'https://world.openfoodfacts.org/product/841541000025', 2),
(17, 'Effervescent sans alcool Pêche - Bardinet', '75 cl', 'Bardinet', 'carbonated-drink', 'France', 'Super U, Magasins U', 'Belgique', 'desalcoholized wax (82%) peach juice based on concentrate (10%), sucrose, peach flavors, carbon dioxide, antioxidants: e224 (sulphites), e300,', 'sulphur-dioxide-and-sulphites', 29, 0.5, 7.3, 6.5, 0, 0.5, 0.01, 'sweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/3138670640015', 78),
(18, 'Dolce Gusto', '187 g', 'Dolce Gusto', 'coffee', 'Australia, New Zealand', 'Woolworths', '', 'FLAT WHITE Go TYPICAL NUTRITIONAL INFORMATION Servings Per Pack: 16 Serving Size: 180ml (as prepared) Average Quantity Per serving %DI* per serving Per 100ml Energy 210 kJ', '', 50, 2.3, 4.3, 3.9, 0.5, 0, 0.09, 'unsweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/7613036407717', 1),
(19, 'Jus ananas', '250 ml', 'X-tra', 'non-carbonated-drink', 'Liban, Sénégal', '', 'liban', 'pinapple juice, water, sugar.', '', 65, 0, 16, 13.2, 0, 0, 0.01, 'unsweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/788930201123', 0),
(20, 'Caffè Latte caramel', '230 ml', 'emmi, Emmi Caffè Latte', 'coffee', 'Austria, France, Luxembourg, Switzerland, BeNeLux, Belgien, Deutschland, Niederlande, Schweiz', '', '', '77% partly skimmed milk, 15% arabica coffee , 7% caramelised sugar, flavoring, sodium phosphate stabilizer, carrageenan thickener.\r\nCaffeine content: 60 mg per cup.', 'milk', 59.7, 1.2, 9, 8.6, 0.1, 2.8, 0.08, 'sweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/7610900198924', 6),
(21, 'Hydro coco', '500ml', 'Kalbe', 'non-carbonated-drink', 'Indonesia', '', 'Indonesia', 'C??onut Water (97%), ??ne Sugar, Synthetic Flavout, Vegetable Stabilizer, Acidity Regulator,NO PRESERVATIVES NO ARTIFICIAL SWEETENER.', '', 60, 0, 15, 7, 0, 1, 0.1, 'unsweetened-beverages', 'd', 'https://world.openfoodfacts.org/product/8997009781110', 27),
(22, 'Mosto Greip - Pepsi', '1L', 'Pepsi,Greip', 'non-carbonated-drink', 'Francia, Spain', 'Alcampo', 'Espanya', 'grape juice from concentrate, ingredients, grape juice from concentrate, acidulant: citric acid,', '', 69, 0, 17, 17, 0, 0.2, 0, 'fruit-juices', 'e', 'https://world.openfoodfacts.org/product/8410409019664', 0),
(23, 'Green tea', '40g', 'English Tea Shop', 'tea', 'Netherlands, United Kingdom', 'Albert Heijn', 'United kingdom', 'Organic and Fairtrade green tea (100%)', '', 0, 0, 0, 0, 0, 0, 0, 'unsweetened-beverages', 'b', 'https://world.openfoodfacts.org/product/680275029151', 6),
(24, 'Grüner Tee', '43,75 g', 'Westcliff', 'tea', 'Deutschland', 'Aldi', 'Ostfriesische Tee Gesellschaft GmbH & Co. KG 21218 Seevetal Deutschland', 'Grüner Tee, Aroma, Vanille.', '', 1, 0, 0.2, 0.1, 0, 0, 0, '', 'c', 'https://world.openfoodfacts.org/product/4061458000826', 7),
(25, 'Pulco Agrumes', '70 cl', 'Pulco', 'non-carbonated-drink', 'France', 'carrefour.fr', '', 'fruit juice based on concentrate: pink grapefruit 22%, clementine 20%, orange 16,5%, lime 12,5%, lemon 10,5%, blood orange 4% (equivalent to 84% reconstituted juice), sugar, lemon pulp 5%, acidifier: citric acid, natural citrus flavors,', '', 23, 0.1, 35.6, 34.4, 0, 0.6, 0.01, 'sweetened-beverages', 'c', 'https://world.openfoodfacts.org/product/3225355490925', 5),
(26, 'Sarsaparilla', '375 ml', 'Bundaberg Brewed Drinks Pty Ltd', 'carbonated-drink', 'Australia, New Zealand', '', 'Bundaberg, Queensland', 'Carbonated Water, Cane Sugar, Sarsaparilla Brew (Water, Sugar, Molasses, Ginger Root, Sarsaparilla Root, Licorice Root Extract, Vanilla Bean Extract, Yeast), Colour (Caramel IV), Acid (Citric Acid). Preservatives (202, 211), Antioxidant (Ascorbic Acid), Sarsaparilla Flavour.', '', 48.42666667, 0.266666667, 11.89333333, 11.81333333, 0, 0.266666667, 0.03, 'sweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/9311493003401', 138),
(27, 'Rote Bete Saft - REWE Bio', '0,5 l', 'REWE Bio,REWE', 'non-carbonated-drink', 'Deutschland', 'REWE', 'Großbeeren OT Diedersdorf', 'beetroot juice 99%, lemon juice*, acerola cherry powder\',', '', 35, 0, 7.5, 7.5, 0, 1, 0.08, '', 'b', 'https://world.openfoodfacts.org/product/4388844022348', 3),
(28, 'Mogu Mogu', '10.82 FL.OZ', 'Sappe, Mogu mogu', 'non-carbonated-drink', 'Philippines', '', '', 'Water, Nata De Coco, Fructose, Citric Acid, Artificial color, preservatives.', '', 15.6, 0, 13, 12, 0, 0, 0, 'sweetened-beverages', '', 'https://world.openfoodfacts.org/product/8850389113004', 18),
(29, 'Haferdrink Barista-Edition', '1l', 'OATLY', 'plant-milk', 'Austria, Germany, Deutschland, Frankreich, Niederlande, Schweiz, Vereinigtes Königreich', 'REWE,Edeka,HIT', '', 'basic oatmeal (water, oats 10%), rapeseed oil, corrector of acidity (orthophosphate dipotassium), calcium carbonate, calcium phosphates, iodized salt, vitamins (d2, riboflavin, b12), contains neither milk nor soy,', 'gluten', 59, 3, 6.6, 4, 0.8, 1, 0.1, 'plant-based-milk-substitutes', 'b', 'https://world.openfoodfacts.org/product/7394376616501', 0),
(30, 'kefir', '500 g', 'Nestlé,Sveltesse', 'milk', 'Italie', 'Esselunga', '', 'kefir', '', 44, 1.5, 3.9, 3.9, 0, 3.4, 0.1, 'milk-and-yogurt', 'd', 'https://world.openfoodfacts.org/product/3023290012079', 5),
(31, 'Nestle Chuckie', '1000ml', 'Nestle', 'coffee', 'Philippines', '', '', 'Water, Skimmed milk powder, Sugar, Palm oil, Cocoa powder, Minerals (CALCI-N° calcium phosphate from milk 0.23%, Disodium phosphate, Iron pyrophosphate, Zinc sulfate), Stabilizers (Sodium carboxymethyl cellulose, Carrageenan, Microcrystalline cellulose), Thickener (Modified starch), Nature-identical, natural, and artificial flavors, Emulsifier (Mono-and digiycerides of fatty acids), Vitamins (Vitamin B1, Vitamin A, Vitamin D), Sweetener (Sucralose), Caramel color', 'milk', 119, 4.3, 16, 14.7, 0.9, 5, 0.28, 'sweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/4800361331265', 9),
(32, 'Organic & unsweetened Almond', '1 litre', 'Plenish', 'plant-milk', 'France, United Kingdom', 'Sainsbury\'s', '', 'Filtered water, _Almonds_ 6%, Sea salt', 'nuts', 121, 2.5, 0.4, 0, 0.5, 1, 0.1, 'plant-based-milk-substitutes', 'b', 'https://world.openfoodfacts.org/product/5060362070474', 7),
(33, 'Blueberry', '45g', 'Teekanne', 'tea', 'Czech Republic, Hungary, Poland, Serbia, Slovakia, Slovenia', '', '', 'blueberry tea', '', 2, 0, 0.4, 0, 0, 0, 0, '', 'b', 'https://world.openfoodfacts.org/product/5901086065127', 10),
(34, 'Roasted almond milk', '1 l', 'Alpro', 'plant-milk', 'Ausztria, Belgium, ', 'Magasins U,Delhaize,Rewe,Unes,Aldi Sud,Kaufland,Tesco Extra,carrefour.fr', 'Vlamingstraat,28 - 8560 Wevelgem,Belgium', 'water, sugar, almond (2.3%), tricalcium phosphate, table sea salt, stabilizers (locust bean seed flour, gellan gum), emulsifier (lecithins (sunflower)], vitamins (b2, b12, e, d2),', 'nuts', 22, 1.1, 2.4, 2.4, 0.4, 0.4, 0.14, 'plant-based-milk-substitutes', 'b', 'https://world.openfoodfacts.org/product/5411188110835', 1),
(35, 'La limonada de Font Vella', '1,5 l', 'Font Vella', 'non-carbonated-drink', 'Spain', '', '', 'natural mineral water, lemon juice based on concentrate (6%), sugar, acidity correctors: citric acid and sodium citrate, stabilizers: gum arabic, e445 and e444, sweetener: steviol glycosides, natural aroma', '', 13, 0, 3.1, 3.1, 0, 0, 0.02, 'sweetened-beverages', 'c', 'https://world.openfoodfacts.org/product/8410055885101', 4),
(36, 'Fizzy Zero', '330ml', 'Vimto', 'carbonated-drink', 'United Kingdom', '', '', 'Ingredients Carbonated Water, Mixed Fruit juices From concentrate 3% (Grape, Blackcurrant, Raspberry), Acids (Citric Acid, Malic Acid), Vimto Flavouring (Including Natural Extracts of Fruits, Herbs, Barley Malt and Spices), Colouring Food (Concentrates of Carrot, Hibiscus), Preservatives (Potassium Sorbate, Sodium Benzoate), Acidity Regulator (Sodium Citrate), Sweeteners (Sucralose, Acesulfame K), Antioxidant (Ascorbic Acid), Flavourings.', 'gluten', 3, 0, 0.5, 0.5, 0, 0, 0.02, 'artificially-sweetened-beverages', 'c', 'https://world.openfoodfacts.org/product/5010438007767', 31),
(37, 'SHAPE KETO CHOCOLATE', '50 g', 'AUSSIE BODIES', 'coffee', 'Australia', '', 'New zealand', 'Aussie Bodies@ Keto Nutrition Fat Blend (37%) [Medium Chain Triglycerides (MCT), Coconut Oil, Vegetable Gum (Acacia Gum)], Aussie Bodies® Keto Nutrition Protein Blend (18%) [Whey Protein Concentrate (Milk), Pea Protein Isolate, Emulsifier (Sunflower Lecithin)], Cocoa Powder, Whole Milk Powder [With (1E Emulsifier (Soy Lecithin)], Sweeteners (Erythritol, Thaumatin, Steviol Glycosides), Vitamins and Minerals (Calcium, Magnesium, Phosphorus, Vitamin C, Iron, Vitamin E, Zinc, Vitamin B3, Vitamin A, lodine, Potassium, Vitamin D3, Vitamin B6, Vitamin B1, Folic Acid, Vitamin B2, Chromium, Vitamin B12, Vitamin B5), Natural Flavours, Vegetable Gums (Xanthan Gum, Guar Gum), Salt, L-Carnitine Tartrate, Green Coffee Bean Extract.', 'milk, soybeans', 0, 16, 3.9, 2.6, 7.1, 10, 0.34, 'artificially-sweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/9317296342426', 6),
(38, 'Biotta - cocktail de légumes', '500ml', 'Biotta', 'non-carbonated-drink', 'Allemagne, Suisse', '', '', 'jus de tomate, jus de carot - te jus de céleri&quot;, jus de betterave rouge acidifiant (acide lactique L(+) naturel), sel lenes miries au soleil oltis en uise Affiné es,ce jus s\'utilise Hemple à laperitif ou marin (0.5%), herbes aromatiques&quot; Pasteurisé. &quot;de l\'agriculture biologique hues moyenes (100 ml) Hersteller/Fabricant: Biotta AG , représente une 100 kJ (', '', 23, 0, 5, 4.5, 0, 0.8, 0.53, 'unsweetened-beverages', 'b', 'https://world.openfoodfacts.org/product/7618500940967', 3),
(39, 'Shhh this is not milk', '1l', 'Alpro', 'plant-milk', 'United Kingdom', '', '', '(Water, Oat (8.7%]), Sunflower oil, Soluble corn fiber, Sugar, Pea protein, Calcium (Calcium carbonate), Acidity regulator (Potassium phosphates), Flavourings, Sea salt, Stabiliser (Gellan gum), Potassium lodide, Vitamins (B12, D2)', 'gluten', 62, 3.5, 6.4, 1.2, 1, 0.7, 0.12, 'plant-based-milk-substitutes', 'a', 'https://world.openfoodfacts.org/product/5411188136255', 1),
(40, 'Batu kombucha', '330ml', 'Batu', 'carbonated-drink', 'Netherlands', '', '', 'Water, kombucha culture, passion fruit (1%), green tea, cane sugar(fully converted during the fermentation process), hops, black tea, stevia', '', 10, 0, 2.2, 0, 0, 1, 0.01, 'sweetened-beverages', 'c', 'https://world.openfoodfacts.org/product/8725500901023', 1),
(41, 'IPA - Bavaria', '25 cl', 'Bavaria', 'non-alcoholic-beer', 'France', 'Super U', 'Pays-Bas', 'natural mineral water, barley malt, hops, hop extract, brewed and bottled in the netherlands by: bavaria n,v,, p,o, box 1, 5737 zg lieshout, holland, www,bavaria', 'gluten', 19, 0, 4.4, 2.35, 0, 0.3, 0, 'unsweetened-beverages', 'c', 'https://world.openfoodfacts.org/product/8714800039048', 8),
(42, 'Tetley Green Tea Mint', '40g', 'Tetley', 'tea', 'United Kingdom', 'Asda', 'United Kingdom', 'Green tea (85%), natural mint flavouring (10%), peppermint leaves (5%).', '', 1, 0, 0.3, 0, 0, 0, 0, 'unsweetened-beverages', 'b', 'https://world.openfoodfacts.org/product/5000208015184', 1),
(43, 'Eau minérale naturelle des Alpes', '50cl', 'monoprix', 'water', 'France', 'monoprix', '', 'average composition calcium 44.4 mg/l sodium 1.3 mg/l magnesium 1 mg/l potassium, lt.0.5 mg/l bicarbonates 137 mg/l sulphates, lt.5mg/l nitrates 4.4mg/l chlorides, lt.1mg/l fluorine, lt.0.05mg/l dry residue at 180°c 139 mg/l ph 8', '', 0, 0, 0, 0, 0, 0, 0, 'unsweetened-beverages', 'a', 'https://world.openfoodfacts.org/product/3350033208346', 41),
(44, 'Coles Chai Latte 10 Sachets', '250 g', 'Coles', 'tea', 'Australia', 'Coles', 'Germany', 'Sugar, Whey Powder, Skimmed Milk Powder (11%), Coconut Fat, Tea Extract (3.5%), Natural Flavour, Spices (0.5%) (Cinnamon, Cardamom, Ginger, Cloves), Thickener (Xanthan Gum), Stabiliser (339).\n\nALLERGY ADVICE: CONTAINS MILK.', 'milk', 101, 2, 18.1, 18.1, 1, 2.2, 0.33, '', '', 'https://world.openfoodfacts.org/product/9310645280080', 2),
(45, 'Ice Tea Pfirsich - Pfanner', '2 l', 'Pfanner', 'non-carbonated-drink', 'Frankreich, Deutschland, Norwegen, Schweden', '', 'Österreich', 'infusion of black tea, rosehip and hibiscus flower (water, black tea, rosehip, hibiscus flower), sugar, peach juice (1%) from peach juice concentrate, acidifier citric acid, flavouring', '', 25, 0.5, 6.2, 6.2, 0, 0.5, 0.01, 'sweetened-beverages', 'd', 'https://world.openfoodfacts.org/product/9006900011529', 12),
(46, 'Almond milk', '1 L', 'Inside Out', 'plant-milk', 'Australia', 'Coles,Woolworths', 'Silverwater NSW', 'Almond Milk (89%) [Filtered Water, Activated Almonds (4%)], Maltodextrin, Faba Bean, Raw Sugar, Minerals (Potassium Citrate, Potassium Phosphate, Calcium Phosphate, Calcium Carbonate), Vegetable Oil (Rapeseed), Vitamins (B12, D), Sea Salt, Vegetable Gum (Gellan).', '', 52, 1.44, 6.04, 1.4, 0.04, 3.4, 0.083, 'plant-based-milk-substitutes', 'a', 'https://world.openfoodfacts.org/product/9348470000672', 8),
(47, 'Valio Gefilus Smoothie', '250 ml', 'Valio', 'non-carbonated-drink', 'Finland', '', '', 'GEFILUS® LAKTOOSITON ligt socker i mjölk och frukt Föryaras under +8 °C. MANGO-BANAANI - JOGURTTIJUOMA Ainekset: pastöroitu maito, mangosose (10 %), vesi, banaani - sose (5%), sokeri, maissitärkkelys, aromit, jogurttihapate, Lactobacillus rhamnosus GG, D-vitamiini. Ravistettava. Säilytettävä alle +8 °C:ssa. Tuotteen sisältämä sokeri (8,2 g/100g) koostuu lisätystä sokerista (4,0 g/100g) sekä maidon ja hedelmien luontai - sista sokereista (4,2 g/100g). GEFILUS® LAKTOSFRI YOGHURT - DRYCK MANGO-BANAN Ingredienser: pastöriserad mjölk, mangopuré (10%), vatten, banan - puré (5%), socker, majsstärkelse, aromer, yoghurtkultur, Lactobacillus rhamnosus GG, vitamin D. Omskakas. Sockerarterna i produkten (8,2 g/100g) består av tillsatt socker (4,0 g/100 e) och natuur - ligt socker i mjölk och frukt (4,2 g/100 g). TUTUSTU MEIHIN SUOMES valio fi/?efilus', '', 62, 1.4, 0, 8.2, 0, 2.5, 0.1, 'unsweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/6408430028283', 5),
(48, 'Batido sabor chocolate - Hacendado', '200 ml', 'Hacendado', 'coffee', 'Spain', 'MERCADONA', '', 'partially skim milk (1.0% fat), sugar, milk permeation, degreased cocoa (1%), stabilizers (e-407, e-460, e-466 and e-451), flavourings, vitamins [retinyl acetate (vitamin a), thiamine mononitrate (vitamin b1), riboflavin (vitamin b2 nicotinamide (niacin), d-pantothenate calcium (pantothenic acid), pyridoxine hydrochloride (vitamin b6), d-biotin (biotin), pteroylmonoglutamic acid (folic acid), cholecalciferol (vitamin) and dl-alpha tocopheryl acetate (vitamin e)] and lactase ,', 'milk', 61, 0.7, 11, 11, 0, 2.1, 0.13, 'sweetened-beverages', 'e', 'https://world.openfoodfacts.org/product/8480000100504', 36),
(49, 'TehTarik', '480g', 'Aik Cheong', 'tea', 'Tonga', '', '', 'Creamer [ Glucose Syrup, Hydrogenated Palm Kernel Olls, Sodium Caseinate (Contain Milk Protein), Emulsifier E471, Stabilizer E340, Anti-Caking Agent E551, Beta-Carotene E160a ], Sugar And Instant Black Tea', 'milk', 90, 20, 17, 13, 1, 0, 0.00075, '', '', 'https://world.openfoodfacts.org/product/9556771004026', 23),
(50, 'Oat Barista Blend', '1 L', 'Califia Farms', 'plant-milk', 'United Kingdom', '', '', 'OAT DRINK (WATER, OATS (10%)), SUNFLUWER OIL, ACIDITY REGULATOR (DIPOTASSIUM PHOSPHATE), CALCIUM CARBONATE, TRICALOIUM PHOSPHATE. SEA SALT.', 'gluten', 55, 3, 5.7, 2, 0.8, 0.7, 0.125, 'plant-based-milk-substitutes', 'b', 'https://world.openfoodfacts.org/product/813636022953', 57),
(51, 'Starbucks Cappuccino', '220 ml', '', 'coffee', '', '', '', 'lait (contient 3,0% de matières grasses) 75%, café arabica Starbucks® (eau, extrait de café) 19,8%, sucre, cacao maigre en poudre 0,1%, correcteur d\'acidité (carbonates de potassium), stabilisants (carraghénanes, gomme guar), émulsifiants (mono - et diglycérides d\'acides gras d\'origine végétale), arôme naturel, arôme.', '', 69, 2.5, 8.8, 0, 0, 0, 0.08, '', 'd', '', 77),
(52, 'Orange juice - Ocean Spray', '227 ml', '', 'non-carbonated-drink', '', '', '', 'orange juice concentrate (filtered water and concentrate orange juice), natural flavors.', '', 46, 0, 11.333, 0, 0, 0.889, 1.667, '', 'b', '', 64);

--
-- Declanșatori `products`
--
DELIMITER $$
CREATE TRIGGER `after_delete_products` AFTER DELETE ON `products` FOR EACH ROW INSERT INTO web_feed (title, link,description)
VALUES 
(CONCAT(Old.name," - ",Old.size ," just left Soft Drinks Organizer!"),"http://localhost/SoDrO/contact-us.php#newsletterHref",Concat("Subscribe to our newsletter to never miss a drink ever again!"))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_web_feed` AFTER INSERT ON `products` FOR EACH ROW INSERT IGNORE INTO web_feed (title, link,description)
  VALUES (CONCAT(New.name, ' - ', New.size, ' just hopped on our website!'), concat('SoDrO/product-page.php?id=',New.id),'Click on the link to see the freshest drink we added.')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `password` longtext NOT NULL,
  `email` tinytext NOT NULL,
  `description` text NOT NULL,
  `type` varchar(6) NOT NULL DEFAULT 'user',
  `fullname` varchar(50) NOT NULL DEFAULT 'Name',
  `image` varchar(200) NOT NULL DEFAULT 'basic-profile-picture.jpg',
  `loggedIn` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `description`, `type`, `fullname`, `image`, `loggedIn`) VALUES
(1, 'ionut.tabalae', '$2y$10$YMT9l9bTGCwZo.i2zUDAjeaZYNHwwSqG0jGktiEvoesN8BDb66tza', 'ionut@gmail.com', 'Descrierea mea', 'user', 'Name', 'basic-profile-picture.jpg', 2),
(2, 'Ionut', '$2y$10$H.R4cVLGrLXnC7qDOblyB.qFPVzkSCs8FZ8t26yIa1w0XJq482O1G', 'ionutsebastian210@yahoo.com', 'Descrierea mea', 'user', 'Tabalae Ioan-Sebastian', '13295-404-4042710_circle-profile-picture-png-transparent-png-1.png', 4),
(3, 'test', '$2y$10$Q7EZT5DvsmX5RojWDbsnXe6ccxAV1ReCJxHkSglV39xayGM1F53ye', 'test@test.com', '', 'user', 'Name', 'basic-profile-picture.jpg', 1),
(4, 'JohnnyIOnut', '$2y$10$JIgTlykxG1j5p9C5HVJXq.CCKPLJLTBJModxJMV/BYCi7CPaMDT8G', 'test@test.com123123', '', 'user', 'Name', 'basic-profile-picture.jpg', 0),
(10, 'andreibalteanu', '$2y$10$daNzB3s6v/gJnQghT8dgG.CXpTr2LUANRNh3/IAUu9SlyEQ.T/vge', 'andrei@yahoo.com', '', 'user', 'Name', 'basic-profile-picture.jpg', 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `web_feed`
--

CREATE TABLE `web_feed` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `web_feed`
--

INSERT INTO `web_feed` (`id`, `title`, `link`, `description`) VALUES
(1, 'Produs nou adaugat', 'http://localhost/SoDrO/product-page.php?id=25', 'Tocmai a fost adaugat un produs nou. Apasa pe link pentru a il vizualiza!'),
(2, 'Produs adaugat', 'http://localhost/SoDrO/product-page.php?id=11', 'Check this out!'),
(3, 'Coca-Cola - 250ml just hopped on our website!', 'SoDrO/product-page.php?id=0', 'Click on the link to see the freshest drink we added.'),
(15, 'Coca-Cola - 250ml just left Soft Drinks Organizer!', 'http://localhost/SoDrO/contact-us.php#newsletterHref', 'Subscribe to our newsletter to never miss a drink ever again!'),
(16, 'Fanta - 330ml just hopped on our website!', 'SoDrO/product-page.php?id=0', 'Click on the link to see the freshest drink we added.'),
(17, 'Fanta - 330ml just left Soft Drinks Organizer!', 'http://localhost/SoDrO/contact-us.php#newsletterHref', 'Subscribe to our newsletter to never miss a drink ever again!'),
(18, 'test - test just hopped on our website!', 'SoDrO/product-page.php?id=0', 'Click on the link to see the freshest drink we added.'),
(19, 'test - test just left Soft Drinks Organizer!', 'http://localhost/SoDrO/contact-us.php#newsletterHref', 'Subscribe to our newsletter to never miss a drink ever again!'),
(20, 'Apple Juice - 1L just hopped on our website!', 'SoDrO/product-page.php?id=53', 'Click on the link to see the freshest drink we added.'),
(21, 'Apple Juice - 1L just left Soft Drinks Organizer!', 'http://localhost/SoDrO/contact-us.php#newsletterHref', 'Subscribe to our newsletter to never miss a drink ever again!');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`) VALUES
(59, 3, 28),
(69, 2, 37),
(70, 2, 26),
(74, 2, 31),
(75, 10, 14),
(76, 10, 17);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexuri pentru tabele `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `web_feed`
--
ALTER TABLE `web_feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pentru tabele `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pentru tabele `web_feed`
--
ALTER TABLE `web_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pentru tabele `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
