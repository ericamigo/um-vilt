import { DateTime } from 'luxon'

export function useLuxon(date) {
    return DateTime.fromISO(date)
}

export function useDateFormatter() {}
export function useDateToRelative() {}
