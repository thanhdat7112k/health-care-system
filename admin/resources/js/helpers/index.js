export const formatPrice = price => {
    return new Intl.NumberFormat('ja-JP').format(price) + '円';
}
