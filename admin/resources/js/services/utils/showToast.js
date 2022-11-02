import { toast } from 'bulma-toast';

const createToast = type => {
    return message => {
        toast({
            message,
            type,
            duration: 3000,
            dismissible: true,
            animate: { in: 'fadeIn', out: 'fadeOut' },
        })
    }
}

export const showSuccessToast = createToast('is-success');
export const showErrorToast = createToast('is-danger');
export const showInfoToast = createToast('is-info');
export const showWarningToast = createToast('is-warning');
